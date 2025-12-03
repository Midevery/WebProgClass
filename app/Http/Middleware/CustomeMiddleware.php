<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //kondisi untuk gate keepernya biar dia gabisa akses
        if (!$request->session()->has('user_id')) {
            return redirect()->route('demo.login');
        }
        return $next($request);
    }
}
