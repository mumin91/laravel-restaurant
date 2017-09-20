<?php

namespace App\Http\Middleware;

use Auth;

use Closure;

class LoggedInAdmin
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
        if (Auth::guard()->check()) {
            return redirect('/');
        }


        if (Auth::guard('admin')->check()) {
            return redirect('/admin_dashboard');
        }
        return $next($request);
    }
}
