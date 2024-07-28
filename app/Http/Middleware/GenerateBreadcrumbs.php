<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\View;

class GenerateBreadcrumbs
{
    public function handle($request, Closure $next)
    {
        $path = $request->path();

        // Hanya memproses breadcrumb jika path dimulai dengan 'dashboard'
        if (strpos($path, 'dashboard') === 0) {
            $segments = explode('/', $path);
            $breadcrumbs = [];

            // Breadcrumb untuk root dashboard
            $breadcrumbs[] = [
                'name' => 'Dashboard',
                'url' => url('/dashboard')
            ];

            // Breadcrumb untuk segmentasi setelah dashboard
            foreach (array_slice($segments, 1) as $key => $segment) {
                $url = '/dashboard/' . implode('/', array_slice($segments, 1, $key + 1));
                $breadcrumbs[] = [
                    'name' => ucfirst($segment),
                    'url' => url($url)
                ];
            }

            View::share('breadcrumbs', $breadcrumbs);
        }

        return $next($request);
    }
}
