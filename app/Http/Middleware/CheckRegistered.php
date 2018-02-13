<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRegistered
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
        // check only user is registered and login
        
        if (Auth::check()) {
        	return $next($request);
        } else {
        	if ($request->ajax()) {
        		return response('Unauthorized.', 401);
        	} else {
        		return redirect()->guest('login');
        	}
        }
    }
}
