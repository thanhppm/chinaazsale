<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class LoginMiddleware
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
        if(Auth::check())
        {
            $user=Auth::user();
            if($user->role=='admin')
            {
            return $next($request);
            }
            else{
                Auth::logout();
                return redirect()->route('login')->with('notification','ban khog co quyen truy cap trang nay!!!');
            }
        }
        else{
            return redirect()->route('login');
        }
    }
}
