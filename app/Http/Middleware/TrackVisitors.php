<?php

namespace App\Http\Middleware;

use App\Models\Visitors;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    public function handle(Request $request, Closure $next): Response
    {
        $ipAddress = $request->ip();

        // Update or create the visitor entry
        Visitors::updateOrCreate(
            ['ip_address' => $ipAddress],
            ['user_agent' => DB::raw('user_agent + 1')],
            
        );

        return $next($request);
    }
}
