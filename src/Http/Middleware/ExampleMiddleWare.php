<?php

namespace Ridrog\Boilerplate\Http\Middleware;

use Closure;

class ExampleMiddleWare
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
        if (true) {
            return $next($request);
        }
    }
}