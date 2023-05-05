<?php

namespace App\Services;

use Illuminate\Support\Str;

/**
 * Сохраняет принятый файл.
 */
class Uploader
{
    public static function upload($file)
    {
        $path = config('pdfGenerator.uploads');                     // путь к директории загрузки файла
        $file_name = Str::random(10) . '.' . $file->extension();    // генерация имени файла
        $file->storeAs($path, $file_name);                          // перемещение файла
        return $file_name;                                          // возвращает имя файла
    }
}
