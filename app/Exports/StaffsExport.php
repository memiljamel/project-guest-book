<?php

namespace App\Exports;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class StaffsExport implements FromQuery, ShouldAutoSize, WithHeadings, WithMapping
{
    use Exportable;

    /**
     * Define the query to fetch data for export.
     */
    public function query(): Builder
    {
        return Staff::query();
    }

    /**
     * Define the headings for the export file.
     */
    public function headings(): array
    {
        return [
            'No',
            'Staff Number',
            'Name',
            'Gender',
            'Email',
            'Phone Number',
            'Job Title',
            'Department',
            'Created At',
            'Updated At',
        ];
    }

    /**
     * Map the data from the model to be included in the export file.
     *
     * @param  Staff  $staff
     */
    public function map($staff): array
    {
        static $number = 1;

        return [
            $number++,
            $staff->staff_number,
            $staff->name,
            $staff->gender->label(),
            $staff->email,
            $staff->phone_number,
            $staff->job_title,
            $staff->department?->name,
            $staff->created_at,
            $staff->updated_at,
        ];
    }
}
