<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->exists('user')){
            if($request->session()->get('user')=='hoangluu2508@gmail.com'){
                return $next($request);
            }else{
                return redirect('/home');
            }
        }else{
            return redirect('/login_user');
        }
    }
}
