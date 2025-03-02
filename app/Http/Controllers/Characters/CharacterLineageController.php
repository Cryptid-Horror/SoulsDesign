<?php

namespace App\Http\Controllers\Characters;

use App\Http\Controllers\Controller;
use App\Models\Character\Character;
use App\Models\Character\CharacterLineage;

class CharacterLineageController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Character Lineage Controller
    |--------------------------------------------------------------------------
    |
    | Handles display of character lineage pages.
    |
    */

    /**
     * Shows the character lineage page.
     *
     * @param string $slug
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getCharacterLineage($slug)
    {
        return $this->getLineagePage($slug, false);
    }

    /**
     * Shows the MYO slot lineage page.
     *
     * @param int $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getMyoLineage($id)
    {
        return $this->getLineagePage($id, true);
    }

    /**
     * Shows the character's lineage page.
     *
     * @param mixed $id
     * @param mixed $isMyo
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getLineagePage($id, $isMyo = false)
    {
        $this->character = $isMyo ? Character::where('is_myo_slot', 1)->where('id', $id)->first() : Character::where('slug', $id)->first();
        if (!$this->character) {
            abort(404);
        }
        // if they haven't got the option to have descendents...
        if ($this->character->getLineageBlacklistLevel() > 0) {
            abort(404);
        }

        $hasLineage = $this->character->lineage !== null;

        return view('character.lineage', [
            'character'          => $this->character,
            'hasLineage'         => $hasLineage,
            'lineage'            => $this->character->lineage,
            'children'           => CharacterLineage::getChildrenStatic($this->character->id, true),
            'grandchildren'      => CharacterLineage::getGrandchildrenStatic($this->character->id, true),
            'greatGrandchildren' => CharacterLineage::getGreatGrandchildrenStatic($this->character->id, true),
            'isMyo'              => $isMyo,
        ]);
    }

    /**
     * Shows the character lineage page.
     *
     * @param string $slug
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getCharacterChildren($slug)
    {
        return $this->getChildren($slug, false);
    }

    /**
     * Shows the character lineage page.
     *
     * @param string $slug
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getCharacterGrandchildren($slug)
    {
        return $this->getGrandchildren($slug, false);
    }

    /**
     * Shows the character lineage page.
     *
     * @param string $slug
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getCharacterGreatGrandchildren($slug)
    {
        return $this->getGreatGrandchildren($slug, false);
    }

    /**
     * Shows the page for character children.
     *
     * @param mixed $id
     * @param mixed $isMyo
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getChildren($id, $isMyo = false)
    {
        $this->character = $isMyo ? Character::where('is_myo_slot', 1)->where('id', $id)->first() : Character::where('slug', $id)->first();
        if (!$this->character) {
            abort(404);
        }
        if ($this->character->getLineageBlacklistLevel() > 0) {
            abort(404);
        }

        $children = $isMyo ? null : CharacterLineage::getChildrenStatic($this->character->id, false);

        return $this->getDescendantDisplay($this->character, 'Children', $children, $isMyo);
    }

    /**
     * Shows the page for character grandchildren.
     *
     * @param mixed $id
     * @param mixed $isMyo
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getGrandchildren($id, $isMyo = false)
    {
        $this->character = $isMyo ? Character::where('is_myo_slot', 1)->where('id', $id)->first() : Character::where('slug', $id)->first();
        if (!$this->character) {
            abort(404);
        }
        if ($this->character->getLineageBlacklistLevel() > 0) {
            abort(404);
        }

        $children = $isMyo ? null : CharacterLineage::getGrandchildrenStatic($this->character->id, false);

        return $this->getDescendantDisplay($this->character, 'Grandchildren', $children, $isMyo);
    }

    /**
     * Shows the page for character children.
     *
     * @param mixed $id
     * @param mixed $isMyo
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getGreatGrandchildren($id, $isMyo = false)
    {
        $this->character = $isMyo ? Character::where('is_myo_slot', 1)->where('id', $id)->first() : Character::where('slug', $id)->first();
        if (!$this->character) {
            abort(404);
        }
        if ($this->character->getLineageBlacklistLevel() > 0) {
            abort(404);
        }

        $children = $isMyo ? null : CharacterLineage::getGreatGrandchildrenStatic($this->character->id, false);

        return $this->getDescendantDisplay($this->character, 'Great-Grandchildren', $children, $isMyo);
    }

    private function getDescendantDisplay($character, $title, $descendants, $isMyo = false)
    {
        return view('character.lineage_children', [
            'character' => $character,
            'title'     => $title,
            'children'  => $descendants,
            'isMyo'     => $isMyo,
        ]);
    }
}
