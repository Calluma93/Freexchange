<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckEmployer {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        
        $user = $request->user();
        
        if (Auth::user() && $user->type == 'employer') {
            
            return $next($request);
        } 
        
            return redirect()->intended('/');

    }

}
