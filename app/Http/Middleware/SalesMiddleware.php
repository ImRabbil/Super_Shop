<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class SalesMiddleware
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
        if(Auth::check()){
            if(Auth::user()->role_id==3){
                return $next($request);
 
            }else{
                return redirect()->back();
            }

        }else{
            return redirect()->route('login');

        }
    }
}
