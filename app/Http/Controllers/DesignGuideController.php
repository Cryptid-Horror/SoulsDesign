<?php

namespace App\Http\Controllers;

use Auth;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\SitePage;

use App\Services\DeviantArtService;

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
