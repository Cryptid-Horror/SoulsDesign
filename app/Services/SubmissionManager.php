<?php

namespace App\Services;

use App\Models\Award\Award;
use App\Models\Character\Character;
use App\Models\Claymore\Gear;
use App\Models\Claymore\Weapon;
use App\Models\Currency\Currency;
use App\Models\Item\Item;
use App\Models\Loot\LootTable;
use App\Models\Pet\Pet;
use App\Models\Prompt\Prompt;
use App\Models\Raffle\Raffle;
use App\Models\Recipe\Recipe;
use App\Models\Status\StatusEffect;
use App\Models\Submission\Submission;
use App\Models\Submission\SubmissionCharacter;
use App\Models\User\User;
use App\Models\User\UserItem;
use App\Services\Stats\ExperienceManager;
use App\Services\Stats\StatManager;
use DB;
use Illuminate\Support\Arr;
use Notifications;
use Settings;

class SubmissionManager extends Service
{
    /**
     * Creates a new submission.
     *
     * @param array                 $data
     * @param \App\Models\User\User $user
     * @param bool                  $isClaim
     *
     * @return mixed
     */
    public function createSubmission($data, $user, $isClaim = false)
    {
        DB::beginTransaction();

        try {
            // 1. check that the prompt can be submitted at this time
            // 2. check that the characters selected exist (are visible too)
            // 3. check that the currencies selected can be attached to characters
            if (!$isClaim && !Settings::get('is_prompts_open')) {
                throw new \Exception('The prompt queue is closed for submissions.');
            } elseif ($isClaim && !Settings::get('is_claims_open')) {
                throw new \Exception('The claim queue is closed for submissions.');
            }
            if (!$isClaim && !isset($data['prompt_id'])) {
                throw new \Exception('Please select a prompt.');
            }
            if (!$isClaim) {
                $prompt = Prompt::active()->where('id', $data['prompt_id'])->with('rewards')->first();
                if (!$prompt) {
                    throw new \Exception('Invalid prompt selected.');
                }
                //check that the prompt limit hasn't been hit
                if ($prompt->limit) {
                    //check that the user hasn't hit the prompt submission limit
                    //filter the submissions by hour/day/week/etc and count
                    $count['all'] = Submission::submitted($prompt->id, $user->id)->count();
                    $count['Hour'] = Submission::submitted($prompt->id, $user->id)->where('created_at', '>=', now()->startOfHour())->count();
                    $count['Day'] = Submission::submitted($prompt->id, $user->id)->where('created_at', '>=', now()->startOfDay())->count();
                    $count['Week'] = Submission::submitted($prompt->id, $user->id)->where('created_at', '>=', now()->startOfWeek())->count();
                    $count['Month'] = Submission::submitted($prompt->id, $user->id)->where('created_at', '>=', now()->startOfMonth())->count();
                    $count['Year'] = Submission::submitted($prompt->id, $user->id)->where('created_at', '>=', now()->startOfYear())->count();

                    //if limit by character is on... multiply by # of chars. otherwise, don't
                    if ($prompt->limit_character) {
                        $limit = $prompt->limit * Character::visible()->where('is_myo_slot', 0)->where('user_id', $user->id)->count();
                    } else {
                        $limit = $prompt->limit;
                    }
                    //if limit by time period is on
                    if ($prompt->limit_period) {
                        if ($count[$prompt->limit_period] >= $limit) {
                            throw new \Exception('You have already submitted to this prompt the maximum number of times.');
                        }
                    } elseif ($count['all'] >= $limit) {
                        throw new \Exception('You have already submitted to this prompt the maximum number of times.');
                    }
                }
            }

            // The character identification comes in both the slug field and as character IDs
            // that key the reward ID/quantity arrays.
            // We'll need to match characters to the rewards for them.
            // First, check if the characters are accessible to begin with.
            if (isset($data['slug'])) {
                $characters = Character::myo(0)->visible()->whereIn('slug', $data['slug'])->get();
                if (count($characters) != count($data['slug'])) {
                    throw new \Exception('One or more of the selected characters do not exist.');
                }
            } else {
                $characters = [];
            }

            $userAssets = createAssetsArray();

            // Attach items. Technically, the user doesn't lose ownership of the item - we're just adding an additional holding field.
            // We're also not going to add logs as this might add unnecessary fluff to the logs and the items still belong to the user.
            if (isset($data['stack_id'])) {
                foreach ($data['stack_id'] as $stackId) {
                    $stack = UserItem::with('item')->find($stackId);
                    if (!$stack || $stack->user_id != $user->id) {
                        throw new \Exception('Invalid item selected.');
                    }
                    if (!isset($data['stack_quantity'][$stackId])) {
                        throw new \Exception('Invalid quantity selected.');
                    }
                    $stack->submission_count += $data['stack_quantity'][$stackId];
                    $stack->save();

                    addAsset($userAssets, $stack, $data['stack_quantity'][$stackId]);
                }
            }

            // Attach currencies.
            if (isset($data['currency_id'])) {
                foreach ($data['currency_id'] as $holderKey=>$currencyIds) {
                    $holder = explode('-', $holderKey);
                    $holderType = $holder[0];
                    $holderId = $holder[1];

                    $holder = User::find($holderId);

                    $currencyManager = new CurrencyManager;
                    foreach ($currencyIds as $key=>$currencyId) {
                        $currency = Currency::find($currencyId);
                        if (!$currency) {
                            throw new \Exception('Invalid currency selected.');
                        }
                        if ($data['currency_quantity'][$holderKey][$key] < 0) {
                            throw new \Exception('Cannot attach a negative amount of currency.');
                        }
                        if (!$currencyManager->debitCurrency($holder, null, null, null, $currency, $data['currency_quantity'][$holderKey][$key])) {
                            throw new \Exception('Invalid currency/quantity selected.');
                        }

                        addAsset($userAssets, $currency, $data['currency_quantity'][$holderKey][$key]);
                    }
                }
            }
            if (!$isClaim) {
                //level req
                if ($prompt->level_req) {
                    if (!$user->level || $user->level->current_level < $prompt->level_req) {
                        throw new \Exception('You are not high enough level to enter this prompt');
                    }
                }
            }

            // Get a list of rewards, then create the submission itself
            $promptRewards = createAssetsArray();
            if (!$isClaim) {
                foreach ($prompt->rewards as $reward) {
                    addAsset($promptRewards, $reward->reward, $reward->quantity);
                }
            }
            $promptRewards = mergeAssetsArrays($promptRewards, $this->processRewards($data, false, null, $isClaim));
            $submission = Submission::create([
                'user_id'  => $user->id,
                'url'      => $data['url'] ?? null,
                'status'   => 'Pending',
                'comments' => $data['comments'],
                'data'     => json_encode([
                    'user'    => Arr::only(getDataReadyAssets($userAssets), ['user_items', 'currencies']),
                    'rewards' => getDataReadyAssets($promptRewards),
                    ]), // list of rewards and addons
            ] + ($isClaim ? [] : ['prompt_id' => $prompt->id]));

            // Retrieve all reward IDs for characters
            $currencyIds = [];
            $itemIds = [];
            $tableIds = [];
            $statusIds = [];
            if (isset($data['character_currency_id'])) {
                foreach ($data['character_currency_id'] as $c) {
                    foreach ($c as $currencyId) {
                        $currencyIds[] = $currencyId;
                    }
                } // Non-expanded character rewards
            } elseif (isset($data['character_rewardable_id'])) {
                $data['character_rewardable_id'] = array_map([$this, 'innerNull'], $data['character_rewardable_id']);
                foreach ($data['character_rewardable_id'] as $ckey => $c) {
                    foreach ($c as $key => $id) {
                        switch ($data['character_rewardable_type'][$ckey][$key]) {
                            case 'Currency': $currencyIds[] = $id;
                                break;
                            case 'Item': $itemIds[] = $id;
                                break;
                            case 'StatusEffect': $statusIds[] = $id;
                                break;
                            case 'LootTable': $tableIds[] = $id;
                                break;
                        }
                    }
                } // Expanded character rewards
            }
            array_unique($currencyIds);
            array_unique($itemIds);
            array_unique($tableIds);
            array_unique($statusIds);
            $currencies = Currency::whereIn('id', $currencyIds)->where('is_character_owned', 1)->get()->keyBy('id');
            $items = Item::whereIn('id', $itemIds)->get()->keyBy('id');
            $tables = LootTable::whereIn('id', $tableIds)->get()->keyBy('id');
            $statuses = StatusEffect::whereIn('id', $statusIds)->get()->keyBy('id');

            // Attach characters
            foreach ($characters as $key => $c) {
                // Users might not pass in clean arrays (may contain redundant data) so we need to clean that up
                $assets = $this->processRewards($data + ['character_id' => $c->id, 'currencies' => $currencies, 'items' => $items, 'tables' => $tables, 'statuses' => $statuses], true);

                // Now we have a clean set of assets (redundant data is gone, duplicate entries are merged)
                // so we can attach the character to the submission
                SubmissionCharacter::create([
                    'character_id'  => $c->id,
                    'submission_id' => $submission->id,
                    'data'          => json_encode(getDataReadyAssets($assets)),
                    'is_focus'      => $data['is_focus'][$key],
                ]);

                if ($data['is_focus'][$key] && $submission->prompt_id) {
                    foreach ($submission->prompt->skills as $skill) {
                        if ($skill->skill->parent) {
                            $charaSkill = $c->skills()->where('skill_id', $skill->skill->id)->first();
                            if (!$charaSkill || $charaSkill->level < $skill->parent_level) {
                                throw new \Exception('Skill level too low on one or more characters.');
                            }
                        }
                        if ($skill->skill->prerequisite) {
                            $charaSkill = $c->skills()->where('skill_id', $skill->skill->id)->first();
                            if (!$charaSkill) {
                                throw new \Exception('Skill not unlocked on one or more characters.');
                            }
                        }
                    }
                }
            }

            return $this->commitReturn($submission);
        } catch (\Exception $e) {
            $this->setError('error', $e->getMessage());
        }

        return $this->rollbackReturn(false);
    }

    /**
     * Rejects a submission.
     *
     * @param array                 $data
     * @param \App\Models\User\User $user
     *
     * @return mixed
     */
    public function rejectSubmission($data, $user)
    {
        DB::beginTransaction();

        try {
            // 1. check that the submission exists
            // 2. check that the submission is pending
            if (!isset($data['submission'])) {
                $submission = Submission::where('status', 'Pending')->where('id', $data['id'])->first();
            } elseif ($data['submission']->status == 'Pending') {
                $submission = $data['submission'];
            } else {
                $submission = null;
            }
            if (!$submission) {
                throw new \Exception('Invalid submission.');
            }

            // Return all added items
            $addonData = $submission->data['user'];
            if (isset($addonData['user_items'])) {
                foreach ($addonData['user_items'] as $userItemId => $quantity) {
                    $userItemRow = UserItem::find($userItemId);
                    if (!$userItemRow) {
                        throw new \Exception('Cannot return an invalid item. ('.$userItemId.')');
                    }
                    if ($userItemRow->submission_count < $quantity) {
                        throw new \Exception('Cannot return more items than was held. ('.$userItemId.')');
                    }
                    $userItemRow->submission_count -= $quantity;
                    $userItemRow->save();
                }
            }

            // And currencies
            $currencyManager = new CurrencyManager;
            if (isset($addonData['currencies']) && $addonData['currencies']) {
                foreach ($addonData['currencies'] as $currencyId=>$quantity) {
                    $currency = Currency::find($currencyId);
                    if (!$currency) {
                        throw new \Exception('Cannot return an invalid currency. ('.$currencyId.')');
                    }
                    if (!$currencyManager->creditCurrency(null, $submission->user, null, null, $currency, $quantity)) {
                        throw new \Exception('Could not return currency to user. ('.$currencyId.')');
                    }
                }
            }

            if (isset($data['staff_comments']) && $data['staff_comments']) {
                $data['parsed_staff_comments'] = parse($data['staff_comments']);
            } else {
                $data['parsed_staff_comments'] = null;
            }

            // The only things we need to set are:
            // 1. staff comment
            // 2. staff ID
            // 3. status
            $submission->update([
                'staff_comments'        => $data['staff_comments'],
                'parsed_staff_comments' => $data['parsed_staff_comments'],
                'staff_id'              => $user->id,
                'status'                => 'Rejected',
            ]);

            Notifications::create($submission->prompt_id ? 'SUBMISSION_REJECTED' : 'CLAIM_REJECTED', $submission->user, [
                'staff_url'     => $user->url,
                'staff_name'    => $user->name,
                'submission_id' => $submission->id,
            ]);

            if (!$this->logAdminAction($user, 'Submission Rejected', 'Rejected submission <a href="'.$submission->viewurl.'">#'.$submission->id.'</a>')) {
                throw new \Exception('Failed to log admin action.');
            }

            return $this->commitReturn($submission);
        } catch (\Exception $e) {
            $this->setError('error', $e->getMessage());
        }

        return $this->rollbackReturn(false);
    }

    /**
     * Approves a submission.
     *
     * @param array                 $data
     * @param \App\Models\User\User $user
     *
     * @return mixed
     */
    public function approveSubmission($data, $user)
    {
        DB::beginTransaction();

        try {
            // 1. check that the submission exists
            // 2. check that the submission is pending
            $submission = Submission::where('status', 'Pending')->where('id', $data['id'])->first();
            if (!$submission) {
                throw new \Exception('Invalid submission.');
            }

            // Remove any added items, hold counts, and add logs
            $addonData = $submission->data['user'];
            $inventoryManager = new InventoryManager;
            if (isset($addonData['user_items'])) {
                $stacks = $addonData['user_items'];
                foreach ($addonData['user_items'] as $userItemId => $quantity) {
                    $userItemRow = UserItem::find($userItemId);
                    if (!$userItemRow) {
                        throw new \Exception('Cannot return an invalid item. ('.$userItemId.')');
                    }
                    if ($userItemRow->submission_count < $quantity) {
                        throw new \Exception('Cannot return more items than was held. ('.$userItemId.')');
                    }
                    $userItemRow->submission_count -= $quantity;
                    $userItemRow->save();
                }

                // Workaround for user not being unset after inventory shuffling, preventing proper staff ID assignment
                $staff = $user;

                foreach ($stacks as $stackId=>$quantity) {
                    $stack = UserItem::find($stackId);
                    $user = User::find($submission->user_id);
                    if (!$inventoryManager->debitStack($user, $submission->prompt_id ? 'Prompt Approved' : 'Claim Approved', ['data' => 'Item used in submission (<a href="'.$submission->viewUrl.'">#'.$submission->id.'</a>)'], $stack, $quantity)) {
                        throw new \Exception('Failed to create log for item stack.');
                    }
                }

                // Set user back to the processing staff member, now that addons have been properly processed.
                $user = $staff;
            }

            // Log currency removal, etc.
            $currencyManager = new CurrencyManager;
            if (isset($addonData['currencies']) && $addonData['currencies']) {
                foreach ($addonData['currencies'] as $currencyId=>$quantity) {
                    $currency = Currency::find($currencyId);
                    if (!$currencyManager->createLog(
                        $submission->user_id,
                        'User',
                        null,
                        null,
                        $submission->prompt_id ? 'Prompt Approved' : 'Claim Approved',
                        'Used in '.($submission->prompt_id ? 'prompt' : 'claim').' (<a href="'.$submission->viewUrl.'">#'.$submission->id.'</a>)',
                        $currencyId,
                        $quantity
                    )) {
                        throw new \Exception('Failed to create currency log.');
                    }
                }
            }

            // The character identification comes in both the slug field and as character IDs
            // that key the reward ID/quantity arrays.
            // We'll need to match characters to the rewards for them.
            // First, check if the characters are accessible to begin with.
            if (isset($data['slug'])) {
                $characters = Character::myo(0)->visible()->whereIn('slug', $data['slug'])->get();
                if (count($characters) != count($data['slug'])) {
                    throw new \Exception('One or more of the selected characters do not exist.');
                }
            } else {
                $characters = [];
            }

            // Get the updated set of rewards
            $rewards = $this->processRewards($data, false, true);

            // Logging data
            $promptLogType = $submission->prompt_id ? 'Prompt Rewards' : 'Claim Rewards';
            $promptData = [
                'data' => 'Received rewards for '.($submission->prompt_id ? 'submission' : 'claim').' (<a href="'.$submission->viewUrl.'">#'.$submission->id.'</a>)',
            ];

            // Distribute user rewards
            if (!$rewards = fillUserAssets($rewards, $user, $submission->user, $promptLogType, $promptData)) {
                throw new \Exception('Failed to distribute rewards to user.');
            }

            // Retrieve all reward IDs for characters
            $currencyIds = [];
            $itemIds = [];
            $tableIds = [];
            $statusIds = [];
            $awardIds = [];
            if (isset($data['character_currency_id'])) {
                foreach ($data['character_currency_id'] as $c) {
                    foreach ($c as $currencyId) {
                        $currencyIds[] = $currencyId;
                    }
                } // Non-expanded character rewards
            } elseif (isset($data['character_rewardable_id'])) {
                $data['character_rewardable_id'] = array_map([$this, 'innerNull'], $data['character_rewardable_id']);
                foreach ($data['character_rewardable_id'] as $ckey => $c) {
                    foreach ($c as $key => $id) {
                        switch ($data['character_rewardable_type'][$ckey][$key]) {
                            case 'Currency':    $currencyIds[] = $id;
                                break;
                            case 'Item':        $itemIds[] = $id;
                                break;
                            case 'LootTable':   $tableIds[] = $id;
                                break;
                            case 'Award':       $awardIds[] = $id;
                                break;
                            case 'StatusEffect': $statusIds[] = $id;
                                break;
                        }
                    }
                } // Expanded character rewards
            }
            array_unique($currencyIds);
            array_unique($itemIds);
            array_unique($tableIds);
            array_unique($awardIds);
            array_unique($statusIds);
            $currencies = Currency::whereIn('id', $currencyIds)->where('is_character_owned', 1)->get()->keyBy('id');
            $items = Item::whereIn('id', $itemIds)->get()->keyBy('id');
            $tables = LootTable::whereIn('id', $tableIds)->get()->keyBy('id');
            $awards = Award::whereIn('id', $awardIds)->get()->keyBy('id');
            $statuses = StatusEffect::whereIn('id', $statusIds)->get()->keyBy('id');

            // We're going to remove all characters from the submission and reattach them with the updated data
            $submission->characters()->delete();

            // do the user stats stuff first so that we can use variables later
            // stats & exp ---- currently prompt only
            if ($submission->prompt_id && $submission->prompt->expreward) {
                // initialise
                $levelLog = new ExperienceManager;
                $statLog = new StatManager;
                // data
                $levelData = 'Received rewards for '.($submission->prompt_id ? 'submission' : 'claim').' (<a href="'.$submission->viewUrl.'">#'.$submission->id.'</a>)';
                // to be encoded
                $user_exp = null;
                $user_points = null;
                $character_exp = null;
                $character_points = null;
                // user
                $level = $submission->user->level;
                $levelUser = $submission->user;
                if (!$level) {
                    throw new \Exception('This user does not have a level log.');
                }

                // exp
                if ($submission->prompt->expreward->user_exp || isset($data['bonus_user_exp'])) {
                    // get predefined user exp amount
                    $quantity = $submission->prompt->expreward->user_exp;
                    if (isset($data['bonus_user_exp'])) {
                        // add bonus
                        $quantity += $data['bonus_user_exp'];
                    } else {
                        $data['bonus_user_exp'] = 0;
                    }
                    $user_exp += $data['bonus_user_exp'];
                    if (!$levelLog->creditExp(null, $levelUser, $promptLogType, $levelData, $quantity)) {
                        throw new \Exception('Could not grant user exp');
                    }
                }
                //points
                if ($submission->prompt->expreward->user_points || isset($data['bonus_user_points'])) {
                    $quantity = $submission->prompt->expreward->user_points;
                    if (isset($data['bonus_user_points'])) {
                        $quantity += $data['bonus_user_points'];
                    } else {
                        $data['bonus_user_points'] = 0;
                    }
                    $user_points += $data['bonus_user_points'];
                    if (!$statLog->creditStat(null, $levelUser, $promptLogType, $levelData, $quantity)) {
                        throw new \Exception('Could not grant user points');
                    }
                }
            }

            // Distribute character rewards
            foreach ($characters as $key => $c) {
                // Users might not pass in clean arrays (may contain redundant data) so we need to clean that up
                $assets = $this->processRewards($data + ['character_id' => $c->id, 'currencies' => $currencies, 'items' => $items, 'tables' => $tables, 'statuses' => $statuses, 'awards' => $awards], true);

                if (!$assets = fillCharacterAssets($assets, $user, $c, $promptLogType, $promptData, $submission->user)) {
                    throw new \Exception('Failed to distribute rewards to character.');
                }

                SubmissionCharacter::create([
                    'character_id'  => $c->id,
                    'submission_id' => $submission->id,
                    'data'          => json_encode(getDataReadyAssets($assets)),
                    'is_focus'      => $data['is_focus'][$key],
                ]);

                // here we do da skills
                $skillManager = new SkillManager;

                if ($data['is_focus'][$key] && $submission->prompt_id) {
                    foreach ($submission->prompt->skills as $skill) {
                        if (!$skillManager->creditSkill($user, $c, $skill->skill, $skill->quantity, 'Prompt Reward')) {
                            throw new \Exception('Failed to credit skill.');
                        }
                    }
                    // if there's exp rewards
                    if ($submission->prompt->expreward) {
                        $level = $c->level;
                        if (!$level) {
                            throw new \Exception('One or more characters do not have a level log.');
                        }
                        // exp
                        if ($submission->prompt->expreward->chara_exp || isset($data['bonus_exp'])) {
                            $quantity = $submission->prompt->expreward->chara_exp;
                            if (isset($data['bonus_exp'])) {
                                $quantity += $data['bonus_exp'];
                            } else {
                                $data['bonus_exp'] = 0;
                            }
                            $character_exp += $data['bonus_exp'];
                            if (!$levelLog->creditExp(null, $c, $promptLogType, $levelData, $quantity)) {
                                throw new \Exception('Could not grant character exp');
                            }
                        }
                        // points
                        if ($submission->prompt->expreward->chara_points || isset($data['bonus_points'])) {
                            $quantity = $submission->prompt->expreward->chara_points;
                            if (isset($data['bonus_points'])) {
                                $quantity += $data['bonus_points'];
                            } else {
                                $data['bonus_points'] = 0;
                            }
                            $character_points += $data['bonus_points'];
                            if (!$statLog->creditStat(null, $c, $promptLogType, $levelData, $quantity)) {
                                throw new \Exception('Could not grant character points');
                            }
                        }
                    }
                }
            }

            if ($submission->prompt_id && $submission->prompt->expreward) {
                $json[] = [
                    'User_Bonus' => [
                        'exp'    => $user_exp,
                        'points' => $user_points,
                    ],
                    'Character_Bonus' => [
                        'exp'    => $character_exp,
                        'points' => $character_points,
                    ],
                ];

                $bonus = json_encode($json);
            }

            // Increment user submission count if it's a prompt
            if ($submission->prompt_id) {
                $user->settings->submission_count++;
                $user->settings->save();
            }

            if (isset($data['staff_comments']) && $data['staff_comments']) {
                $data['parsed_staff_comments'] = parse($data['staff_comments']);
            } else {
                $data['parsed_staff_comments'] = null;
            }

            // Finally, set:
            // 1. staff comments
            // 2. staff ID
            // 3. status
            // 4. final rewards
            $submission->update([
                'staff_comments'        => $data['staff_comments'],
                'parsed_staff_comments' => $data['parsed_staff_comments'],
                'staff_id'              => $user->id,
                'status'                => 'Approved',
                'data'                  => json_encode([
                    'user'    => $addonData,
                    'rewards' => getDataReadyAssets($rewards),
                    ]), // list of rewards
                'bonus' => $bonus ?? null,
            ]);

            Notifications::create($submission->prompt_id ? 'SUBMISSION_APPROVED' : 'CLAIM_APPROVED', $submission->user, [
                'staff_url'     => $user->url,
                'staff_name'    => $user->name,
                'submission_id' => $submission->id,
            ]);

            if (!$this->logAdminAction($user, 'Submission Approved', 'Approved submission <a href="'.$submission->viewurl.'">#'.$submission->id.'</a>')) {
                throw new \Exception('Failed to log admin action.');
            }

            return $this->commitReturn($submission);
        } catch (\Exception $e) {
            $this->setError('error', $e->getMessage());
        }

        return $this->rollbackReturn(false);
    }

    private function innerNull($value)
    {
        return array_values(array_filter($value));
    }

    /**
     * Processes reward data into a format that can be used for distribution.
     *
     * @param array $data
     * @param bool  $isCharacter
     * @param bool  $isStaff
     * @param bool  $isClaim
     *
     * @return array
     */
    private function processRewards($data, $isCharacter, $isStaff = false, $isClaim = false)
    {
        if ($isCharacter) {
            $assets = createAssetsArray(true);

            if (isset($data['character_currency_id'][$data['character_id']]) && isset($data['character_quantity'][$data['character_id']])) {
                foreach ($data['character_currency_id'][$data['character_id']] as $key => $currency) {
                    if ($data['character_quantity'][$data['character_id']][$key]) {
                        addAsset($assets, $data['currencies'][$currency], $data['character_quantity'][$data['character_id']][$key]);
                    }
                }
            } elseif (isset($data['character_rewardable_type'][$data['character_id']]) && isset($data['character_rewardable_id'][$data['character_id']]) && isset($data['character_rewardable_quantity'][$data['character_id']])) {
                $data['character_rewardable_id'] = array_map([$this, 'innerNull'], $data['character_rewardable_id']);

                foreach ($data['character_rewardable_id'][$data['character_id']] as $key => $reward) {
                    switch ($data['character_rewardable_type'][$data['character_id']][$key]) {
                        case 'Currency': if ($data['character_rewardable_quantity'][$data['character_id']][$key]) {
                            addAsset($assets, $data['currencies'][$reward], $data['character_rewardable_quantity'][$data['character_id']][$key]);
                        } break;
                        case 'Item': if ($data['character_rewardable_quantity'][$data['character_id']][$key]) {
                            addAsset($assets, $data['items'][$reward], $data['character_rewardable_quantity'][$data['character_id']][$key]);
                        } break;
                        case 'Award': if ($data['character_rewardable_quantity'][$data['character_id']][$key]) {
                            addAsset($assets, $data['awards'][$reward], $data['character_rewardable_quantity'][$data['character_id']][$key]);
                        } break;
                        case 'LootTable': if ($data['character_rewardable_quantity'][$data['character_id']][$key]) {
                            addAsset($assets, $data['tables'][$reward], $data['character_rewardable_quantity'][$data['character_id']][$key]);
                        } break;
                        case 'StatusEffect': if ($data['character_rewardable_quantity'][$data['character_id']][$key]) {
                            addAsset($assets, $data['statuses'][$reward], $data['character_rewardable_quantity'][$data['character_id']][$key]);
                        } break;
                    }
                }
            }

            return $assets;
        } else {
            $assets = createAssetsArray(false);
            // Process the additional rewards
            if (isset($data['rewardable_type']) && $data['rewardable_type']) {
                foreach ($data['rewardable_type'] as $key => $type) {
                    $reward = null;
                    switch ($type) {
                        case 'Item':
                            $reward = Item::find($data['rewardable_id'][$key]);
                            break;

                        case 'Currency':
                            $reward = Currency::find($data['rewardable_id'][$key]);
                            if (!$reward->is_user_owned) {
                                throw new \Exception('Invalid currency selected.');
                            }
                            break;

                        case 'Award':
                            $reward = Award::find($data['rewardable_id'][$key]);
                            break;

                        case 'Pet':
                            if (!$isStaff) {
                                break;
                            }
                            $reward = Pet::find($data['rewardable_id'][$key]);
                            break;

                        case 'LootTable':
                            if (!$isStaff) {
                                break;
                            }
                            $reward = LootTable::find($data['rewardable_id'][$key]);
                            break;

                        case 'Raffle':
                            if (!$isStaff) {
                                break;
                            }
                            $reward = Raffle::find($data['rewardable_id'][$key]);
                            break;

                        case 'Recipe':
                            if (!$isStaff) {
                                break;
                            }
                            $reward = Recipe::find($data['rewardable_id'][$key]);
                            if (!$reward->needs_unlocking) {
                                throw new \Exception('Invalid recipe selected.');
                            }

                        case 'Gear':
                            if (!$isStaff) {
                                break;
                            }
                            $reward = Gear::find($data['rewardable_id'][$key]);
                            break;

                        case 'Weapon':
                            if (!$isStaff) {
                                break;
                            }
                            $reward = Weapon::find($data['rewardable_id'][$key]);

                            break;
                    }
                    if (!$reward) {
                        continue;
                    }
                    addAsset($assets, $reward, $data['quantity'][$key]);
                }
            }

            return $assets;
        }
    }
}
