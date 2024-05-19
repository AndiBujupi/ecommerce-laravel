<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check() || Auth::user()->role !== 'user') {
            Auth::logout(); // Log out the user
            return redirect('/login')->withErrors('You are not authorized to access this page.');
        }

        return $next($request);
    }
}
