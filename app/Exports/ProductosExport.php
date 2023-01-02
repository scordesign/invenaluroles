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
use App\Http\Controllers;
use Illuminate\Contracts\View\View;

use Maatwebsite\Excel\Concerns\FromView;

class ProductosExport implements FromView
{
  
    public function view(): View{
        
        return view('producto.export',[
         'producto' =>Producto::all()
        ]);

    }
    
}
