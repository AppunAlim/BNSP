<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthenticateDaftar
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (!auth()->check()) {
            // If not authenticated, redirect to the registration page
            return redirect()->route('daftar')->with('error', 'Anda harus mendaftar untuk mengakses halaman ini.');
        }

        return $next($request);
    }
}
