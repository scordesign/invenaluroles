<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductosExport;
use App\Http\Controllers;

use App\Models\Producto;
use App\Models\Bodega;
use App\Models\Codigo;
use App\Models\Grupo;
use App\Models\Ubicacione;
use App\Models\Unidade;
use App\Models\Pareja;
use App\Models\Parejaone;

class ExcelController extends Controller
{
    //
    public function ProductosExport(){
        return Excel::download(new ProductosExport, 'conteo.xlsx');
    }
}
