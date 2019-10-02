<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class checkAdminLogin
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
        if(Auth::guard('staff')->check())
        {
            if(Auth::guard('staff')->user()->Role_ID == 1 || Auth::guard('staff')->user()->Role_ID == 2|| Auth::guard('staff')->user()->Role_ID == 3|| Auth::guard('staff')->user()->Role_ID == 4){

                return $next($request);
            } else {
                Auth::logout();
                return redirect()->route('getLogin');
            }
        } elseif(Auth::guard('children')->check()){
            if(Auth::guard('children')->user()->Role_ID == 5){

                return $next($request);
            } else {
                Auth::logout();
                return redirect()->route('getLogin');
            }
        }

        return redirect()->route('getLogin');
    }
}
