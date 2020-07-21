<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Student
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->level == 'pengajar') {
            return redirect()->back();
        }

        if (Auth::user()->level == 'admin') {
            return redirect()->back();
        }

        if (Auth::user()->level == 'murid') {
            return $next($request);
        }
    }
}
