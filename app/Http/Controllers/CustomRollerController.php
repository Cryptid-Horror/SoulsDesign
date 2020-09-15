<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getRoller($file)
    {
        return view('custom_rollers.'.$file);
    }
}
