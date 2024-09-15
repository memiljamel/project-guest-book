<?php

namespace App\Exports;

use App\Models\Feedback;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class FeedbacksExport implements FromQuery, ShouldAutoSize, WithHeadings, WithMapping
{
    use Exportable;

    /**
     * Define the query to fetch data for export.
     */
    public function query(): Builder
    {
        return Feedback::query();
    }

    /**
     * Define the headings for the export file.
     */
    public function headings(): array
    {
        return [
            'No',
            'Description',
            'Feedback Type',
            'Created At',
            'Updated At',
        ];
    }

    /**
     * Map the data from the model to be included in the export file.
     *
     * @param  Feedback  $feedback
     */
    public function map($feedback): array
    {
        static $number = 1;

        return [
            $number++,
            $feedback->description,
            $feedback->feedback_type->label(),
            $feedback->created_at,
            $feedback->updated_at,
        ];
    }
}
