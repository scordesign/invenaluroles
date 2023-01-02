<?php

namespace App\Exports;

use App\Models\Producto;
use App\Models\Bodega;
use App\Models\Codigo;
use App\Models\Grupo;
use App\Models\Ubicacione;
use App\Models\Unidade;
use App\Models\Pareja;
use App\Models\Parejaone;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Concerns\FromCollection;
class ProductosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        Return Producto::all();
         
        
        return view('producto.index', compact('producto', 'bodegas', 'grupos', 'codigos','ubicaciones','unidad','pareja','parejaone'));

    }
    
}
