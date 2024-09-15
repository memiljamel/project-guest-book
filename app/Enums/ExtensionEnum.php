<?php

namespace App\Enums;

enum ExtensionEnum: string
{
    /**
     * define the extension as pdf.
     */
    case PDF = 'pdf';

    /**
     * define the extension as xlsx.
     */
    case EXCEL = 'xlsx';

    /**
     * define the extension as csv.
     */
    case CSV = 'csv';
}
