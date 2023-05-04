<?php

namespace App\Services;

use Illuminate\Support\Str;

/**
 * Сохраняет принятый файл в заранее подготовленное хранилище.
 */
class Uploader
{
    public $uploads;
    public $names;

    public function __construct()
    {
        $this->uploads = config('pdfGenerator.uploads');
        $this->names = [];
    }

    public function upload($request, $name)
    {
        $file_name = Str::random(10) . '.' . $request->$name->extension();
        $request->$name->storeAs($this->uploads, $file_name);
        $this->names[$name] = $file_name;
    }

    public function getFiles() {
        return $this->names;
    }
}
