<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class groupmiddleware
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
        echo "<span>hello from group middleware</span>";
        if($request->input('age')&&$request->input('age')>180){
            return redirect('/home');
        }
        return $next($request);
    }
}
