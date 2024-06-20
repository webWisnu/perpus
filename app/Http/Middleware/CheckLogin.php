<?php

namespace App\Http\Middleware;

use Log;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (auth()->guest()) { // Pastikan menggunakan 'guest'
            // Jika belum login, redirect ke halaman login
            return redirect('/login');
        }




        // if (!$request->expectsJson()) {
        //     return redirect()->route('/login');
        // }

        return $next($request);
    }
}