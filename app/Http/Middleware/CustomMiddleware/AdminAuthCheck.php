<?php

namespace App\Http\Middleware\CustomMiddleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class AdminAuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard='admin')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect()->route('loginForm');
        }
        return $next($request);
    }
}
