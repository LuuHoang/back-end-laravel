<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AfterMiddleware
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
        $response =$next($request);
        // $response->header('Hello','Donal Trump');

        // Log
        $request->ip();
        $request->header('User-Agent');
        Log::channel('after_login')->info($request->ip(). $request->header('User-Agent'));
        return $response;
    }
}
