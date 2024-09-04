<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class Tenant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

        public function handle(Request $request, Closure $next)
        {
            try {
                $tenant = tenant();
                if (!$tenant) {
                    Log::warning('Tenant not found');
                    return response()->json(['error' => 'Tenant not found'], 404);
                }
                return $next($request);
            } catch (\Exception $e) {
                Log::error('Error in middleware: ' . $e->getMessage());
                return response()->json(['error' => 'Internal Server Error'], 500);
            }
        }
    }
