<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class routemiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        echo "<p>hello from route middleware</p>";
        if($request->age && $request->age>100&&$request->age<180){
            return redirect('/f');
        }
        return $next($request);
    }
}
