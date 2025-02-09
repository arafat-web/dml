<?php
namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Http;
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
        if (auth()->check()) {
            return $next($request);
        }

        $ip        = $request->ip();
        $pageUrl   = $request->url();
        $location  = $this->get_location_from_ip($ip);

        $existingVisit = Visitor::where('ip_address', $ip)
            ->where('page_url', $pageUrl)
            ->whereDate('created_at', now()->toDateString())
            ->first();
        if (! $existingVisit) {
            Visitor::create([
                'ip_address' => $ip,
                'user_agent' => $location,
                'page_url'   => $pageUrl,
            ]);
        }

        return $next($request);
    }
    private function get_location_from_ip($ip)
    {
        $data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=$ip"));
        return $data ? $data->geoplugin_city . ', ' . $data->geoplugin_regionName . ', ' . $data->geoplugin_countryName : 'Unknown';
    }
}
