<?php

namespace App\Http\Middleware;

use Closure;

class HasProfile
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
        if(Auth::check() && Auth::user()->profile()->exists()){
            return redirect('/profile/create');
        }
        
    }
}