<?php

namespace App\Exports;

use App\Models\Guest;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class GuestsExport implements FromQuery, WithHeadings, WithMapping, ShouldAutoSize
{
    use Exportable;

    /**
     * Define the query to fetch data for export.
     */
    public function query(): Builder
    {
        return Guest::query();
    }

    /**
     * Define the headings for the export file.
     */
    public function headings(): array
    {
        return [
            'No',
            'Name',
            'Gender',
            'Email',
            'Phone Number',
            'Company',
            'Address',
            'Staff To Visit',
            'Purpose',
            'Created At',
            'Updated At',
        ];
    }

    /**
     * Map the data from the model to be included in the export file.
     *
     * @param Guest $guest
     */
    public function map($guest): array
    {
        static $number = 1;

        return [
            $number++,
            $guest->name,
            $guest->gender->label(),
            $guest->email,
            $guest->phone_number,
            $guest->company,
            $guest->address,
            $guest->staff?->name,
            $guest->purpose,
            $guest->created_at,
            $guest->updated_at,
        ];
    }
}
