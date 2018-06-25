<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if (Auth::User()->isAdmin())
        {
            return $next($request);
        }else{
            return redirect()->guest('/');
        }
    }
}
