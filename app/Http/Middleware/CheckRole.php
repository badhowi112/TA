<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$levels)
    {
        if(in_array($request->user()->level,$levels)){
            return $next($request);            
        }
        return abort(500); // jika hak akses tidak ada
    }
}