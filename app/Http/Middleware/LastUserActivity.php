<?php

namespace App\Http\Middleware;

use Auth;
use Cache;
use Carbon\Carbon;
use Closure;

class LastUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $expiresAt = Carbon::now()->addMinutes(15);
            Cache::put('user-is-online-'.Auth::user()->id, true, $expiresAt);
            Cache::forever('user-is-online-time-'.Auth::user()->id, Carbon::now());
        }

        return $next($request);
    }
}
