<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Bilfeldt\LaravelRouteStatistics\Models\RouteStatistic;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $page = $request->query('page');
        $search = $request->query('search');

        $today = Guest::query()
            ->select(['longest' => Guest::selectRaw('COUNT(*) AS longest')
                ->whereDate('created_at', '<', now())])
            ->addSelect(['latest' => Guest::selectRaw('COUNT(*) AS latest')
                ->whereDate('created_at', '>=', now())])
            ->addSelect(['today_count' => Guest::selectRaw('COUNT(*) AS today_count')
                ->whereDate('created_at', '=', now())])
            ->first();

        $days = Guest::query()
            ->select(['longest' => Guest::selectRaw('COUNT(*) AS longest')
                ->whereDate('created_at', '<', now()->subDays(3))])
            ->addSelect(['latest' => Guest::selectRaw('COUNT(*) AS latest')
                ->whereDate('created_at', '>=', now()->subDays(3))])
            ->addSelect(['days_count' => Guest::selectRaw('COUNT(*) AS days_count')
                ->whereDate('created_at', '=', now()->subDays(3))])
            ->first();

        $weeks = Guest::query()
            ->select(['longest' => Guest::selectRaw('COUNT(*) AS longest')
                ->whereDate('created_at', '<', now()->subWeek())])
            ->addSelect(['latest' => Guest::selectRaw('COUNT(*) AS latest')
                ->whereDate('created_at', '>=', now()->subWeek())])
            ->addSelect(['weeks_count' => Guest::selectRaw('COUNT(*) AS weeks_count')
                ->whereDate('created_at', '=', now()->subWeek())])
            ->first();

        $months = Guest::query()
            ->select(['longest' => Guest::selectRaw('COUNT(*) AS longest')
                ->whereDate('created_at', '<', now()->subMonth())])
            ->addSelect(['latest' => Guest::selectRaw('COUNT(*) AS latest')
                ->whereDate('created_at', '>=', now()->subMonth())])
            ->addSelect(['months_count' => Guest::selectRaw('COUNT(*) AS months_count')
                ->whereDate('created_at', '=', now()->subMonth())])
            ->first();

        $years = Guest::query()
            ->select(['jan' => Guest::selectRaw('SUM(CASE WHEN MONTH(created_at) = 1 THEN 1 ELSE 0 END) as jan')
                ->whereDate('created_at', '>=', now()->subYear())])
            ->addSelect(['feb' => Guest::selectRaw('SUM(CASE WHEN MONTH(created_at) = 2 THEN 1 ELSE 0 END) as feb')
                ->whereDate('created_at', '>=', now()->subYear())])
            ->addSelect(['mar' => Guest::selectRaw('SUM(CASE WHEN MONTH(created_at) = 3 THEN 1 ELSE 0 END) as mar')
                ->whereDate('created_at', '>=', now()->subYear())])
            ->addSelect(['apr' => Guest::selectRaw('SUM(CASE WHEN MONTH(created_at) = 4 THEN 1 ELSE 0 END) as apr')
                ->whereDate('created_at', '>=', now()->subYear())])
            ->addSelect(['may' => Guest::selectRaw('SUM(CASE WHEN MONTH(created_at) = 5 THEN 1 ELSE 0 END) as may')
                ->whereDate('created_at', '>=', now()->subYear())])
            ->addSelect(['jun' => Guest::selectRaw('SUM(CASE WHEN MONTH(created_at) = 6 THEN 1 ELSE 0 END) as jun')
                ->whereDate('created_at', '>=', now()->subYear())])
            ->addSelect(['jul' => Guest::selectRaw('SUM(CASE WHEN MONTH(created_at) = 7 THEN 1 ELSE 0 END) as jul')
                ->whereDate('created_at', '>=', now()->subYear())])
            ->addSelect(['aug' => Guest::selectRaw('SUM(CASE WHEN MONTH(created_at) = 8 THEN 1 ELSE 0 END) as aug')
                ->whereDate('created_at', '>=', now()->subYear())])
            ->addSelect(['sep' => Guest::selectRaw('SUM(CASE WHEN MONTH(created_at) = 9 THEN 1 ELSE 0 END) as sep')
                ->whereDate('created_at', '>=', now()->subYear())])
            ->addSelect(['oct' => Guest::selectRaw('SUM(CASE WHEN MONTH(created_at) = 10 THEN 1 ELSE 0 END) as oct')
                ->whereDate('created_at', '>=', now()->subYear())])
            ->addSelect(['nov' => Guest::selectRaw('SUM(CASE WHEN MONTH(created_at) = 11 THEN 1 ELSE 0 END) as nov')
                ->whereDate('created_at', '>=', now()->subYear())])
            ->addSelect(['dec' => Guest::selectRaw('SUM(CASE WHEN MONTH(created_at) = 12 THEN 1 ELSE 0 END) as decs')
                ->whereDate('created_at', '>=', now()->subYear())])
            ->first();

        $routes = RouteStatistic::when($search, function (Builder $query, ?string $search) {
            $query->where('method', 'LIKE', "%{$search}%")
                ->orWhere('route', 'LIKE', "%{$search}%")
                ->orWhere('status', 'LIKE', "%{$search}%")
                ->orWhere('ip', 'LIKE', "%{$search}%")
                ->orWhere('date', 'LIKE', "%{$search}%")
                ->orWhere('counter', 'LIKE', "%{$search}%");
        })
            ->latest('date')
            ->paginate()
            ->withQueryString();

        if ($page > $routes->lastPage() && $page > 1) {
            abort(404);
        }

        return view('dashboard.index', compact('today', 'days', 'weeks', 'months', 'years', 'routes', 'search'));
    }
}
