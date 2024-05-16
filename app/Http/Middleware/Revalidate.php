<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Auth;

class Revalidate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            return redirect('/dashboard');

        }
        else
        {
            $response = $next($request);
        }
        $response->headers->remove('Set-Cookie', 'XSRF-TOKEN');

            // return $response->header('Cache-Control','no-cache, no-store, must-revalidate')
            // ->header('Pragma','no-cache')->header('Expires','0')->header('X-Frame-Options', 'SAMEORIGIN', false)->header('X-XSS-Protection', '1; mode=block')
            // ->header('X-Content-Type-Options', 'nosniff')->header('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');

            return $response->header('Access-Control-Allow-Headers','x-requested-with')->header('Access-Control-Allow-Methods','POST,GET')
            ->header('Cache-Control','no-cache, no-store, must-revalidate')->header('Pragma','no-cache')
            ->header('Expires','0')->header('Content-Security-Policy', "frame-ancestors 'none';")->header('X-Frame-Options', 'SAMEORIGIN', false)
            ->header('X-Content-Type-Options', 'nosniff')->header('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');
    }
}
