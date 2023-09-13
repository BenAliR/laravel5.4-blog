<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param Closure(Request): (Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->guest() || !auth()->user()->is_admin){
            dd(auth()->user()->is_admin);
        //    abort(403);
        }
        return $next($request);
    }
}
