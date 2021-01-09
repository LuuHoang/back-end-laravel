<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
            if($request->session()->get('user')=='hoang@gmail.com'){
                // $user=User::query()->where('user','hoangluu2508@gmail.com')->first();
                // Log::info('User:' .$user->user .'Id:' .$user->id);
                return $next($request);
            }else{
                return redirect('/home');
            }
        }else{
            return redirect('/login_user');
        }
    }
}
