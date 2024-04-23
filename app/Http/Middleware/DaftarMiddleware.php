<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DaftarMiddleware
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
        // Check if the user has registered for the beasiswa
        if (!$request->user()->registeredForBeasiswa()) {
            // If not, redirect back to the registration page
            return redirect()->route('daftar');
        }

        return $next($request);
    }
}
