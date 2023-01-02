<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductosExport;

class ExcelController extends Controller
{
    //
    public function ProductosExport(){
        return Excel::download(new ProductosExport, 'conteo.xlsx');
    }
}
