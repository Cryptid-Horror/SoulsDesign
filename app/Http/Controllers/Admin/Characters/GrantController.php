<?php

namespace App\Http\Controllers\Admin\Characters;

use App\Http\Controllers\Controller;
use App\Models\Character\Character;
use App\Models\Currency\Currency;
use App\Services\AwardCaseManager;
use App\Services\CurrencyManager;
use App\Services\InventoryManager;
use App\Services\StatusEffectManager;
use Auth;
use Illuminate\Http\Request;

class GrantController extends Controller
{
    /**
     * Grants or removes currency from a character.
     *
     * @param string                       $slug
     * @param App\Services\CurrencyManager $service
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCharacterCurrency($slug, Request $request, CurrencyManager $service)
    {
        $data = $request->only(['currency_id', 'quantity', 'data']);
        if ($service->grantCharacterCurrencies($data, Character::where('slug', $slug)->first(), Auth::user())) {
            flash('Currency granted successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Grants items to characters.
     *
     * @param string                        $slug
     * @param App\Services\InventoryManager $service
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCharacterItems($slug, Request $request, InventoryManager $service)
    {
        $data = $request->only(['item_ids', 'quantities', 'data', 'disallow_transfer', 'notes']);
        if ($service->grantCharacterItems($data, Character::where('slug', $slug)->first(), Auth::user())) {
            flash('Items granted successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Grants or removes status effect(s) from a character.
     *
     * @param string                           $slug
     * @param App\Services\StatusEffectManager $service
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCharacterStatusEffect($slug, Request $request, StatusEffectManager $service)
    {
        $data = $request->only(['status_id', 'quantity', 'data']);
        if ($service->grantCharacterStatusEffects($data, Character::where('slug', $slug)->first(), Auth::user())) {
            flash('Status effect granted successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Grants awards to characters.
     *
     * @param string                        $slug
     * @param App\Services\InventoryManager $service
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCharacterAwards($slug, Request $request, AwardCaseManager $service)
    {
        $data = $request->only(['award_ids', 'quantities', 'data', 'disallow_transfer', 'notes']);
        if ($service->grantCharacterAwards($data, Character::where('slug', $slug)->first(), Auth::user())) {
            flash('Awards granted successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }
}
