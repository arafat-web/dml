<?php
namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $ip        = $request->ip();
        $userAgent = $request->header('User-Agent');
        $pageUrl   = $request->url();

        // Check if the visitor has already been counted in the last 24 hours
        $existingVisit = Visitor::where('ip_address', $ip)
            ->where('page_url', $pageUrl)
            ->whereDate('created_at', now()->toDateString())
            ->first();

        if (! $existingVisit) {
            Visitor::create([
                'ip_address' => $ip,
                'user_agent' => $userAgent,
                'page_url'   => $pageUrl,
            ]);
        }

        return $next($request);
    }
}
