<?php
namespace App\ExcelFileInjections;

use \Maatwebsite\Excel\Files\ExcelFile;

class BDGraduadosIntegrada2013Import extends ExcelFile {

    public function getFile()
    {
        return storage_path('data/BDGraduadosIntegrada2013.xlsx');
    }

    public function getFilters()
    {
        return [
            'chunk'
        ];
    }

}