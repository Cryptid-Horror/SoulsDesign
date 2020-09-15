<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DesignGuideController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Design Guide Controller
    |--------------------------------------------------------------------------
    |
    | Displays the index page for design guides.
    |
    */

    /**
     * Shows the homepage.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getIndex()
    {
        return view('design_guides.index');
    }

    /**
     * Shows the specified guide page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getGuide($folder, $file)
    {
        return view('design_guides.'.$folder.'.'.$file);
    }
}
