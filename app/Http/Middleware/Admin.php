<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if (!Auth::check()) {
           
            return redirect()->route('login');
        }

        $userRole = Auth::user()->usertype;

        // Check if the user is an admin
        if ($userRole === 'admin') {
            
            return $next($request);
        }

        // Check if the user is a regular user
        if ($userRole === 'user') {
            // Redirect to the dashboard if the user is a regular user
            return redirect()->route('dashboard');
        }

    
    }
}
