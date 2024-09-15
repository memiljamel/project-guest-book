<?php

namespace App\Exports;

use App\Models\Department;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class DepartmentsExport implements FromQuery, ShouldAutoSize, WithHeadings, WithMapping
{
    use Exportable;

    /**
     * Define the query to fetch data for export.
     */
    public function query(): Builder
    {
        return Department::query();
    }

    /**
     * Define the headings for the export file.
     */
    public function headings(): array
    {
        return [
            'No',
            'Name',
            'Code',
            'Created At',
            'Updated At',
        ];
    }

    /**
     * Map the data from the model to be included in the export file.
     *
     * @param  Department  $department
     */
    public function map($department): array
    {
        static $number = 1;

        return [
            $number++,
            $department->name,
            $department->code,
            $department->created_at,
            $department->updated_at,
        ];
    }
}
