<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $response = $next($request);
        
            $response->header('Access-Control-Allow-Headers', 'x-requested-with');
            $response->header('Access-Control-Max-Age', '3600');
            $response->header('Cache-Control', 'no-cache, no-store, must-revalidate');
            $response->header('Pragma', 'no-cache');
            $response->header('Expires', '0');
            $response->header('Content-Security-Policy', "frame-ancestors 'none';");
            $response->header('X-Frame-Options', 'SAMEORIGIN', false);
            $response->header('X-XSS-Protection', '1; mode=block');
            $response->header('X-Content-Type-Options', 'nosniff');
            $response->header('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');
        } else {
            return redirect('');
        }
        
        return $response;
        
        
    }
}
