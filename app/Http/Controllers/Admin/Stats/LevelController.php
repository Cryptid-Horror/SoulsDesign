<?php

namespace App\Http\Controllers\Admin\Stats;

use App\Http\Controllers\Controller;
use App\Models\Award\Award;
use App\Models\Claymore\Gear;
use App\Models\Claymore\Weapon;
use App\Models\Currency\Currency;
use App\Models\Item\Item;
use App\Models\Item\ItemCategory;
use App\Models\Loot\LootTable;
use App\Models\Pet\Pet;
use App\Models\Raffle\Raffle;
use App\Models\Recipe\Recipe;
use App\Models\Stats\Character\CharacterLevel;
use App\Models\Stats\User\Level;
use App\Services\Stats\LevelService;
use Auth;
use Illuminate\Http\Request;

class LevelController extends Controller
{
    // index for levels
    public function getIndex(Request $request)
    {
        $query = Level::query();
        $data = $request->only(['level']);
        if (isset($data['level'])) {
            $query->where('level', 'LIKE', '%'.$data['level'].'%');
        }

        return view('admin.stats.user.user_levels', [
            'levels' => $query->paginate(20)->appends($request->query()),
        ]);
    }

    /**
     * Shows the create level page.
     */
    public function getCreateLevel()
    {
        return view('admin.stats.user.create_edit_level', [
            'level'      => new Level,
            'items'      => Item::orderBy('name')->pluck('name', 'id'),
            'currencies' => Currency::where('is_user_owned', 1)->orderBy('name')->pluck('name', 'id'),
            'tables'     => LootTable::orderBy('name')->pluck('name', 'id'),
            'raffles'    => Raffle::where('rolled_at', null)->where('is_active', 1)->orderBy('name')->pluck('name', 'id'),
            'recipes'    => Recipe::orderBy('name')->pluck('name', 'id'),
            'awards'     => Award::orderBy('name')->pluck('name', 'id'),
            'pets'       => Pet::orderBy('name')->pluck('name', 'id'),
            'gears'      => Gear::orderBy('name')->pluck('name', 'id'),
            'weapons'    => Weapon::orderBy('name')->pluck('name', 'id'),
        ]);
    }

    /**
     * Shows the edit level page.
     *
     * @param mixed $id
     */
    public function getEditLevel($id)
    {
        $level = Level::find($id);
        if (!$level) {
            abort(404);
        }

        return view('admin.stats.user.create_edit_level', [
            'level'      => $level,
            'items'      => Item::orderBy('name')->pluck('name', 'id'),
            'currencies' => Currency::where('is_user_owned', 1)->orderBy('name')->pluck('name', 'id'),
            'tables'     => LootTable::orderBy('name')->pluck('name', 'id'),
            'raffles'    => Raffle::where('rolled_at', null)->where('is_active', 1)->orderBy('name')->pluck('name', 'id'),
            'recipes'    => Recipe::orderBy('name')->pluck('name', 'id'),
            'awards'     => Award::orderBy('name')->pluck('name', 'id'),
            'pets'       => Pet::orderBy('name')->pluck('name', 'id'),
            'gears'      => Gear::orderBy('name')->pluck('name', 'id'),
            'weapons'    => Weapon::orderBy('name')->pluck('name', 'id'),
        ]);
    }

    /**
     * Creates or edits an item.
     *
     * @param mixed|null $id
     */
    public function postCreateEditLevel(Request $request, LevelService $service, $id = null)
    {
        $id ? $request->validate(Level::$updateRules) : $request->validate(Level::$createRules);
        $data = $request->only([
            'level', 'exp_required', 'stat_points', 'rewardable_type', 'rewardable_id', 'quantity', 'description', 'limit_type', 'limit_id', 'limit_quantity',
        ]);
        if ($id && $service->updateLevel(Level::find($id), $data)) {
            flash('Level updated successfully.')->success();
        } elseif (!$id && $level = $service->createLevel($data, Auth::user())) {
            flash('Level created successfully.')->success();

            return redirect()->to('admin/levels/edit/'.$level->id);
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Gets the level deletion modal.
     *
     * @param mixed $id
     */
    public function getDeleteLevel($id)
    {
        $level = Level::find($id);

        return view('admin.stats.user._delete_level', [
            'level' => $level,
        ]);
    }

    /**
     * Creates or edits an level.
     *
     * @param mixed $id
     */
    public function postDeleteLevel(Request $request, LevelService $service, $id)
    {
        if ($id && $service->deleteLevel(Level::find($id))) {
            flash('Level deleted successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->to('admin/levels');
    }

    /**********************************************************************************************

        CHARACTERS

    **********************************************************************************************/

    // index for levels
    public function getCharaIndex(Request $request)
    {
        $query = CharacterLevel::query();
        $data = $request->only(['level']);
        if (isset($data['level'])) {
            $query->where('level', 'LIKE', '%'.$data['level'].'%');
        }

        return view('admin.stats.character.character_levels', [
            'levels' => $query->paginate(20)->appends($request->query()),
        ]);
    }

    /**
     * Shows the create level page.
     */
    public function getCharaCreateLevel()
    {
        $categories = ItemCategory::where('is_character_owned', '1')->orderBy('sort', 'DESC')->get();
        $itemOptions = Item::whereIn('item_category_id', $categories->pluck('id'));
        $item = Item::whereIn('id', $itemOptions->pluck('id'))->pluck('name', 'id');

        return view('admin.stats.character.create_edit_character_level', [
            'level'      => new CharacterLevel,
            'items'      => $item,
            'currencies' => Currency::where('is_user_owned', 1)->orderBy('name')->pluck('name', 'id'),
            'tables'     => LootTable::orderBy('name')->pluck('name', 'id'),
            'raffles'    => Raffle::where('rolled_at', null)->where('is_active', 1)->orderBy('name')->pluck('name', 'id'),
            'recipes'    => Recipe::orderBy('name')->pluck('name', 'id'),
            'awards'     => Award::orderBy('name')->pluck('name', 'id'),
            'pets'       => Pet::orderBy('name')->pluck('name', 'id'),
            'gears'      => Gear::orderBy('name')->pluck('name', 'id'),
            'weapons'    => Weapon::orderBy('name')->pluck('name', 'id'),
        ]);
    }

    /**
     * Shows the edit level page.
     *
     * @param mixed $id
     */
    public function getCharaEditLevel($id)
    {
        $level = CharacterLevel::find($id);
        if (!$level) {
            abort(404);
        }

        $categories = ItemCategory::where('is_character_owned', '1')->orderBy('sort', 'DESC')->get();
        $itemOptions = Item::whereIn('item_category_id', $categories->pluck('id'));
        $item = Item::whereIn('id', $itemOptions->pluck('id'))->pluck('name', 'id');

        return view('admin.stats.character.create_edit_character_level', [
            'level'      => $level,
            'items'      => $item,
            'currencies' => Currency::where('is_user_owned', 1)->orderBy('name')->pluck('name', 'id'),
            'tables'     => LootTable::orderBy('name')->pluck('name', 'id'),
            'raffles'    => Raffle::where('rolled_at', null)->where('is_active', 1)->orderBy('name')->pluck('name', 'id'),
            'recipes'    => Recipe::orderBy('name')->pluck('name', 'id'),
            'awards'     => Award::orderBy('name')->pluck('name', 'id'),
            'pets'       => Pet::orderBy('name')->pluck('name', 'id'),
            'gears'      => Gear::orderBy('name')->pluck('name', 'id'),
            'weapons'    => Weapon::orderBy('name')->pluck('name', 'id'),
        ]);
    }

    /**
     * Creates or edits an item.
     *
     * @param mixed|null $id
     */
    public function postCharaCreateEditLevel(Request $request, LevelService $service, $id = null)
    {
        $id ? $request->validate(CharacterLevel::$updateRules) : $request->validate(CharacterLevel::$createRules);
        $data = $request->only([
            'level', 'exp_required', 'stat_points', 'rewardable_type', 'rewardable_id', 'quantity', 'description', 'limit_type', 'limit_id', 'limit_quantity',
        ]);
        if ($id && $service->updateCharaLevel(CharacterLevel::find($id), $data)) {
            flash('Level updated successfully.')->success();
        } elseif (!$id && $level = $service->createCharaLevel($data, Auth::user())) {
            flash('Level created successfully.')->success();

            return redirect()->to('admin/levels/character/edit/'.$level->id);
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Gets the level deletion modal.
     *
     * @param mixed $id
     */
    public function getCharaDeleteLevel($id)
    {
        $level = CharacterLevel::find($id);

        return view('admin.stats.character._delete_level', [
            'level' => $level,
        ]);
    }

    /**
     * Creates or edits an level.
     *
     * @param mixed $id
     */
    public function postCharaDeleteLevel(Request $request, LevelService $service, $id)
    {
        if ($id && $service->deleteCharaLevel(CharacterLevel::find($id))) {
            flash('Level deleted successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->to('admin/levels/character');
    }
}
