<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckFreelancer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        
        $user = $request->user();
        
        if (Auth::user() && $user->type == 'freelancer') {
                     
            return $next($request);
        } 
        
            return redirect()->intended('/');

    }
}
