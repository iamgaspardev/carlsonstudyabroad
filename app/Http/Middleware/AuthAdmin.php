<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthAdmin
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
        if(auth()->check()){
            if (auth()->user()->utype =="adm"){
                return $next($request);
            }
            else{
                return redirect()->route('login');
            }
        }
        // if (Auth::check() && session('utype') === 'adm') {
        //     return $next($request);
        // } else {
        //     Auth::logout(); 
        //     return redirect()->route('login');
        // }
    }
}
