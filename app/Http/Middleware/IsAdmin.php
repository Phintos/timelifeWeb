<?php

namespace App\Http\Middleware;
use Closure;

class IsAdmin
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
        //se è admin vai alla request???
        if(auth()->user()->isAdmin()) {
            return $next($request);
        } 
        //se no pop-up
        return redirect('/iuWwJCX7AG');
    }
}
