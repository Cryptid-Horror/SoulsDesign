<?php

namespace App\Http\Controllers;

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
     * @param mixed $folder
     * @param mixed $file
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getGuide($folder, $file)
    {
        return view('design_guides.'.$folder.'.'.$file);
    }
}
