<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isFurnishedMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is_furnished) {
            $request->merge(['is_furnished' => 1]);
        } else {
            $request->merge(['is_furnished' => 0]);
        }

        $request->security_deposit ?? $request->merge(["security_deposit" => 0]);
        return $next($request);
    }
}
