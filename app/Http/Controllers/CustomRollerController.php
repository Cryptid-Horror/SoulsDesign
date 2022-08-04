<?php

namespace App\Http\Controllers;

class CustomRollerController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Custom Rollers Controller
    |--------------------------------------------------------------------------
    |
    | Displays the index page for custom rollers.
    |
    */

    /**
     * Shows the specified guide page.
     *
     * @param mixed $file
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getRoller($file)
    {
        return view('custom_rollers.'.$file);
    }
}
