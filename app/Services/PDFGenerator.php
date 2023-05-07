<?php

namespace App\Services;

use Dompdf\Dompdf;
use Dompdf\Options;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Storage;

/**
 * Генерирует PDF-документ.
 */
class PDFGenerator
{
    public $html;
    public $file_name;

    /**
     * Устанавливает значения свойств при создании объекта.
     * 
     * @param string $html
     * @return mixed
     */
    public function __construct($html)
    {
        $this->html = $html;
        $this->file_name = Str::random(10) . '.pdf';
    }

    /**
     * Сборка PDF-файла.
     * 
     * @return string 
     */
    public function generate()
    {

        // создание объекта настроек и его конфигурирование
        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');
        $options->set('isRemoteEnabled', TRUE);

        // создание объекта PDF-документа
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($this->html);

        // определение портретной ориентации
        $dompdf->setPaper('A4', 'portrait');

        // рендер PFD-документа из HTML-документа
        $dompdf->render();

        // вывод результата в файл
        $file = $dompdf->output();

        // сохранение файла на диск
        Storage::put("/public/pdf/$this->file_name", $file);
    }
}
