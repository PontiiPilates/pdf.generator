<?php

namespace App\Services;

use Dompdf\Dompdf;
use Dompdf\Options;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Storage;

/**
 * Генерирует PDF-файл
 */
class PDFGenerator
{
    public $html;
    public $file_name;

    /**
     * Create a new file instance.
     * 
     * @param string $html
     * @return mixed
     */
    public function __construct($html)
    {
        $this->html = $html;
        $this->file_name = Str::random(10);
    }

    /**
     * Build the PDF.
     * 
     * @return string
     */
    public function generate()
    {
        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');
        $options->set('isRemoteEnabled', TRUE);

        // Instantiate and use the dompdf class
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($this->html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        // $dompdf->stream();

        // Output the generated PDF to File
        $file = $dompdf->output();

        // сохранение файла на диск
        Storage::put("/public/pdf/$this->file_name.pdf", $file);

        return $this->file_name;
    }
}
