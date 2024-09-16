<?php

namespace App\Exports;

use Bilfeldt\LaravelRouteStatistics\Models\RouteStatistic;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class RouteStatisticsExport implements FromQuery, ShouldAutoSize, WithHeadings, WithMapping
{
    use Exportable;

    /**
     * Define the query to fetch data for export.
     */
    public function query(): Builder
    {
        return RouteStatistic::query();
    }

    /**
     * Define the headings for the export file.
     */
    public function headings(): array
    {
        return [
            'No',
            'User',
            'Method',
            'Route',
            'Status',
            'Ip',
            'Date',
            'Counter',
        ];
    }

    /**
     * Map the data from the model to be included in the export file.
     *
     * @param  RouteStatistic  $route
     */
    public function map($route): array
    {
        static $number = 1;

        return [
            $number++,
            $route->user?->name,
            $route->method,
            $route->route,
            $route->status,
            $route->ip,
            $route->date,
            $route->counter,
        ];
    }
}
