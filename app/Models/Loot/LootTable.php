<?php

namespace App\Models\Loot;

use App\Models\Item\Item;
use App\Models\Model;
use Config;

class LootTable extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'display_name', 'data',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'loot_tables';
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'data' => 'array',
    ];

    /**
     * Validation rules for creation.
     *
     * @var array
     */
    public static $createRules = [
        'name'                => 'required',
        'display_name'        => 'required',
        'subtable_criteria.*' => 'required_with:subtable_status_id.*',
        'subtable_quantity.*' => 'required_with:subtable_quantity.*',
    ];

    /**
     * Validation rules for updating.
     *
     * @var array
     */
    public static $updateRules = [
        'name'                => 'required',
        'display_name'        => 'required',
        'subtable_criteria.*' => 'required_with:subtable_status_id.*',
        'subtable_quantity.*' => 'required_with:subtable_quantity.*',
    ];

    /**********************************************************************************************

        RELATIONS

    **********************************************************************************************/

    /**
     * Get the loot data for this loot table.
     */
    public function loot()
    {
        return $this->hasMany('App\Models\Loot\Loot', 'loot_table_id');
    }

    /**********************************************************************************************

        ACCESSORS

    **********************************************************************************************/

    /**
     * Displays the model's name, linked to its encyclopedia page.
     *
     * @return string
     */
    public function getDisplayNameAttribute()
    {
        return '<span class="display-loot">'.$this->attributes['display_name'].'</span> '.add_help('This reward is random.');
    }

    /**
     * Gets the loot table's asset type for asset management.
     *
     * @return string
     */
    public function getAssetTypeAttribute()
    {
        return 'loot_tables';
    }

    /**********************************************************************************************

        OTHER FUNCTIONS

    **********************************************************************************************/

    /**
     * Rolls on the loot table and consolidates the rewards.
     *
     * @param int                             $quantity
     * @param bool                            $isCharacter
     * @param \App\Models\Character\Character $character
     *
     * @return \Illuminate\Support\Collection
     */
    public function roll($quantity = 1, $isCharacter = false, $character = null)
    {
        $rewards = createAssetsArray($isCharacter);

        $loot = $this->loot()->where('subtable_id', null)->orWhere(function ($query) use ($isCharacter, $character) {
            // Collect any status-specific rows
            if ($isCharacter && $character) {
                // Check for subtables
                if ($this->data && count($this->data)) {

                    //if(isset($this->data) && count($this->data)) {
                    // Gather the character's status effects
                    $statuses = $character->getStatusEffects();

                    if ($statuses->count()) {
                        // Cycle through subtables checking for matching criteria
                        foreach ($this->data as $key=>$subtable) {
                            if ($statuses->where('id', $subtable['status_id'])->where('quantity', $subtable['criteria'], $subtable['quantity'])->count()) {
                                $query = $query->orWhere('subtable_id', $key);
                                $querySuccess = true;
                            }
                        }
                        if ($querySuccess) {
                            return $query;
                        }
                    }
                }

                // Otherwise use the fallback rows
                return $query = $query->orWhere('subtable_id', 0);
            }

            return $query;
        })->get();

        $totalWeight = 0;
        foreach ($loot as $l) {
            $totalWeight += $l->weight;
        }

        for ($i = 0; $i < $quantity; $i++) {
            $roll = mt_rand(0, $totalWeight - 1);
            $result = null;
            $prev = null;
            $count = 0;
            foreach ($loot as $l) {
                $count += $l->weight;

                if ($roll < $count) {
                    $result = $l;
                    break;
                }
                $prev = $l;
            }
            if (!$result) {
                $result = $prev;
            }

            if ($result) {
                // If this is chained to another loot table, roll on that table
                if ($result->rewardable_type == 'LootTable') {
                    $rewards = mergeAssetsArrays($rewards, $result->reward->roll($result->quantity));
                } elseif ($result->rewardable_type == 'ItemCategory' || $result->rewardable_type == 'ItemCategoryRarity') {
                    $rewards = mergeAssetsArrays($rewards, $this->rollCategory($result->rewardable_id, $result->quantity, ($result->data['criteria'] ?? null), ($result->data['rarity'] ?? null)));
                } elseif ($result->rewardable_type == 'ItemRarity') {
                    $rewards = mergeAssetsArrays($rewards, $this->rollRarityItem($result->quantity, $result->data['criteria'], $result->data['rarity']));
                } else {
                    addAsset($rewards, $result->reward, $result->quantity);
                }
            }
        }

        return $rewards;
    }

    /**
     * Rolls on an item category.
     *
     * @param int        $id
     * @param int        $quantity
     * @param string     $rarity
     * @param mixed|null $criteria
     *
     * @return \Illuminate\Support\Collection
     */
    public function rollCategory($id, $quantity = 1, $criteria = null, $rarity = null)
    {
        $rewards = createAssetsArray();

        if (isset($criteria) && $criteria && isset($rarity) && $rarity) {
            if (Config::get('lorekeeper.extensions.item_entry_expansion.loot_tables.alternate_filtering')) {
                $loot = Item::where('item_category_id', $id)->released()->whereNotNull('data')->where('data->rarity', $criteria, $rarity)->get();
            } else {
                $loot = Item::where('item_category_id', $id)->released()->whereNotNull('data')->whereRaw('JSON_EXTRACT(`data`, \'$.rarity\')'.$criteria.$rarity)->get();
            }
        } else {
            $loot = Item::where('item_category_id', $id)->released()->get();
        }
        if (!$loot->count()) {
            throw new \Exception('There are no items to select from!');
        }

        $totalWeight = $loot->count();

        for ($i = 0; $i < $quantity; $i++) {
            $roll = mt_rand(0, $totalWeight - 1);
            $result = $loot[$roll];

            if ($result) {
                // If this is chained to another loot table, roll on that table
                addAsset($rewards, $result, 1);
            }
        }

        return $rewards;
    }

    /**
     * Rolls on an item rarity.
     *
     * @param int    $quantity
     * @param string $rarity
     * @param mixed  $criteria
     *
     * @return \Illuminate\Support\Collection
     */
    public function rollRarityItem($quantity, $criteria, $rarity)
    {
        $rewards = createAssetsArray();

        if (Config::get('lorekeeper.extensions.item_entry_expansion.loot_tables.alternate_filtering')) {
            $loot = Item::released()->whereNotNull('data')->where('data->rarity', $criteria, $rarity)->get();
        } else {
            $loot = Item::released()->whereNotNull('data')->whereRaw('JSON_EXTRACT(`data`, \'$.rarity\')'.$criteria.$rarity)->get();
        }
        if (!$loot->count()) {
            throw new \Exception('There are no items to select from!');
        }

        $totalWeight = $loot->count();

        for ($i = 0; $i < $quantity; $i++) {
            $roll = mt_rand(0, $totalWeight - 1);
            $result = $loot[$roll];

            if ($result) {
                // If this is chained to another loot table, roll on that table
                addAsset($rewards, $result, 1);
            }
        }

        return $rewards;
    }
}
