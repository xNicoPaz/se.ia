<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExcelFileInjections\BDGraduadosIntegrada2013Import;

class ExcelFileController extends Controller
{
    //
    // public function importBDGraduadosIntegrada2013(BDGraduadosIntegrada2013Import $import){
    // 	dd($import->get());
    // }

    public function importBDGraduadosIntegrada2013v2(){
    	// dd($import->get());

	    \Excel::load(storage_path('data/BDGraduadosIntegrada2013.xlsx'), function($reader){
			$table = "graduados";
	    	$sql = "";
	    	$hoja2009 = $reader->toArray();
	    	for ($i=0; $i < count($hoja2009); $i++) { 
	    		$fila = $hoja2009[$i];
	    	}
	    });
    }
}
