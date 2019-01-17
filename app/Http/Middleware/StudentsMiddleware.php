<?php

namespace App\Http\Middleware;

use Closure;

class StudentsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard='students')
    {
        if(!auth()->guard($guard)->check()){
            return redirect(to '/');    
        }
        return $next($request);
    }
}
