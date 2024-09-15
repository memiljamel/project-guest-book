<?php

namespace App\Http\Controllers;

use App\Enums\ExtensionEnum;
use App\Exports\DepartmentsExport;
use App\Exports\FeedbacksExport;
use App\Exports\GuestsExport;
use App\Exports\StaffsExport;
use Maatwebsite\Excel\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportController extends Controller
{
    /**
     * Export guest data.
     */
    public function guests(ExtensionEnum $extension): BinaryFileResponse
    {
        return match ($extension) {
            ExtensionEnum::PDF => (new GuestsExport())->download('guests.pdf', Excel::DOMPDF),
            ExtensionEnum::EXCEL => (new GuestsExport())->download('guests.xlsx', Excel::XLSX),
            ExtensionEnum::CSV => (new GuestsExport())->download('guests.csv', Excel::CSV),
        };
    }

    /**
     * Export staff data.
     */
    public function staffs(ExtensionEnum $extension): BinaryFileResponse
    {
        return match ($extension) {
            ExtensionEnum::PDF => (new StaffsExport())->download('staffs.pdf', Excel::DOMPDF),
            ExtensionEnum::EXCEL => (new StaffsExport())->download('staffs.xlsx', Excel::XLSX),
            ExtensionEnum::CSV => (new StaffsExport())->download('staffs.csv', Excel::CSV),
        };
    }

    /**
     * Export staff data.
     */
    public function departments(ExtensionEnum $extension): BinaryFileResponse
    {
        return match ($extension) {
            ExtensionEnum::PDF => (new DepartmentsExport())->download('departments.pdf', Excel::DOMPDF),
            ExtensionEnum::EXCEL => (new DepartmentsExport())->download('departments.xlsx', Excel::XLSX),
            ExtensionEnum::CSV => (new DepartmentsExport())->download('departments.csv', Excel::CSV),
        };
    }

    /**
     * Export feedback data.
     */
    public function feedbacks(ExtensionEnum $extension): BinaryFileResponse
    {
        return match ($extension) {
            ExtensionEnum::PDF => (new FeedbacksExport())->download('feedbacks.pdf', Excel::DOMPDF),
            ExtensionEnum::EXCEL => (new FeedbacksExport())->download('feedbacks.xlsx', Excel::XLSX),
            ExtensionEnum::CSV => (new FeedbacksExport())->download('feedbacks.csv', Excel::CSV),
        };
    }
}
