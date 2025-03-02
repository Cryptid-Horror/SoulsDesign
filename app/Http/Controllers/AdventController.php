<?php

namespace App\Http\Controllers;

use App\Models\Advent\AdventCalendar;
use App\Services\AdventManager;
use Auth;

class AdventController extends Controller
{
    /**
     * Shows an advent calendar's information.
     *
     * @param mixed $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getAdvent($id)
    {
        $advent = AdventCalendar::find($id);
        if (!$advent) {
            abort(404);
        }
        if ($advent->start_at->isFuture()) {
            abort(404);
        }

        $dayLog = $advent->participants()->where('user_id', Auth::user()->id)->where('day', $advent->day)->first();
        $participantLog = $advent->participants()->where('user_id', Auth::user()->id)->orderBy('day', 'ASC')->get();

        return view('advent.advent_calendar', [
            'advent'         => $advent,
            'dayLog'         => $dayLog,
            'participantLog' => $participantLog,
        ]);
    }

    /**
     * Claims a daily prize.
     *
     * @param App\Services\HuntManager $service
     * @param mixed                    $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postClaimPrize($id, AdventManager $service)
    {
        $advent = AdventCalendar::find($id);
        if (!$advent) {
            abort(404);
        }

        if ($service->claimPrize($advent, Auth::user())) {
            flash('Successfully claimed prize.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }
}
