<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Character\CharacterCategory;
use App\Models\Character\CharacterDesignUpdate;
use App\Services\DesignUpdateManager;
use Auth;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    /**
     * Show the design index page.
     *
     * @param string $type
     * @param mixed  $status
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getDesignIndex(Request $request, $type, $status)
    {
        $requests = CharacterDesignUpdate::where('status', ucfirst($status));
        if ($type == 'myo-approvals') {
            $requests = $requests->myos();
        } else {
            $requests = $requests->characters();
        }

        return view('admin.designs.index', [
            'requests' => $requests->paginate(30)->appends($request->query()),
            'isMyo'    => ($type == 'myo-approvals'),
        ]);
    }

    /**
     * Show the design action confirmation modal.
     *
     * @param mixed $id
     * @param mixed $action
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getDesignConfirmation($id, $action)
    {
        $r = CharacterDesignUpdate::where('id', $id)->where('status', 'Pending')->first();
        if (!$r) {
            abort(404);
        }

        return view('admin.designs._'.$action.'_request_modal', [
            'request' => $r,
        ] + ($action == 'approve' ? [
            'categories' => CharacterCategory::orderBy('sort')->get(),
        ] : []));
    }

    public function postDesign($id, $action, Request $request, DesignUpdateManager $service)
    {
        $r = CharacterDesignUpdate::where('id', $id)->where('status', 'Pending')->first();

        if ($action == 'cancel' && $service->cancelRequest($request->only(['staff_comments', 'preserve_queue']), $r, Auth::user())) {
            flash('Request cancelled successfully.')->success();
        } elseif ($action == 'approve' && $service->approveRequest($request->only([
                'character_category_id', 'number', 'slug', 'description',
                'is_giftable', 'is_tradeable', 'is_sellable', 'sale_value',
                'transferrable_at', 'set_active', 'invalidate_old', 'adornments',
                'genotype', 'phenotype', 'free_markings',
            ]), $r, Auth::user())) {
            flash('Request approved successfully.')->success();
        } elseif ($action == 'reject' && $service->rejectRequest($request->only(['staff_comments']), $r, Auth::user())) {
            flash('Request rejected successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Casts a vote for a design's approval or denial.
     *
     * @param mixed $id
     * @param mixed $action
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function postVote($id, $action, Request $request, DesignUpdateManager $service)
    {
        $r = CharacterDesignUpdate::where('id', $id)->where('status', 'Pending')->first();
        if (!$r) {
            throw new \Exception('Invalid design update.');
        }

        if ($action == 'reject' && $service->voteRequest($action, $r, Auth::user())) {
            flash('Voted to reject successfully.')->success();
        } elseif ($action == 'approve' && $service->voteRequest($action, $r, Auth::user())) {
            flash('Voted to approve successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }

    /**
     * Edits a design update request's adornments.
     * Admin exclusive.
     *
     * @param App\Services\CharacterManager $service
     * @param int                           $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postAdornments(Request $request, CharacterManager $service, $id)
    {
        $r = CharacterDesignUpdate::find($id);
        if (!$r) {
            abort(404);
        }
        if (!Auth::user()->hasPower('manage_characters')) {
            abort(404);
        }

        if ($service->saveRequestAdornments($request->only('adornments'), $r)) {
            flash('Request edited successfully.')->success();
        } else {
            foreach ($service->errors()->getMessages()['error'] as $error) {
                flash($error)->error();
            }
        }

        return redirect()->back();
    }
}
