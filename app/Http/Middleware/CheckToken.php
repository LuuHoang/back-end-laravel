<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     if($request->has('token')){
    //         return $next($request);
    //     }
    //     return redirect('/login');

    // }
    public function handle(Request $request, Closure $next,$role)
    {
        if($request->input('role')=='admin'){
            return $next($request);
        }
        return redirect('/login');
    }

}
