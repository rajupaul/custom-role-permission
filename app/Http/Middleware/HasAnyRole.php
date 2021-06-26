<?php

namespace App\Http\Middleware;

use Closure;

class HasAnyRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$permissions)
    {
        if(!auth()->user()->hasAnyPermission($permissions)){
          abort(403);
        }
        return $next($request);
    }
}
