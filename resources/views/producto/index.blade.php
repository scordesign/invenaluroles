@extends('layouts.app')

@section('template_title')
    CONTEO INVENTARIO
@endsection
<script>
    function buscar() {
        var count = document.getElementsByTagName("tr").length;
        var buscar =document.getElementById("buscar").value.toLowerCase();
        var acu = 1 ;
        while (acu <= count) {
            var elements = document.getElementById(acu).innerHTML.toLowerCase();
            var element = document.getElementById(acu);
            if (elements.includes(buscar)) {
                element.classList.remove("vis");
            } else {
                element.classList.add("vis");
            }
            acu++;
        }
    }
</script>
<style>
    .vis{
        display: none;
    }
</style>

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Conteo Inventario') }}
                                <input id="buscar" onkeyup="buscar()" type="search" class="form-control float-right" placeholder="buscar" >
                            </span>

                             <div class="float-right">
                                <a href="{{ route('productos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Registrar Nuevo Conteo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre o Codigo Producto</th>
										<th>Bodega</th>
										<th>Grupo</th>
										<th>Unidad</th>
										<th>Ubicación</th>
										<th>Conteo 1</th>
										<th>Conteo 2</th>
										<th>Diferencia Conteo 1 & 2</th>
										<th>Conteo3</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productos as $producto)
                                        <tr id="{{ ++$i }}">
                                            <td>{{ $i }}</td>
                                            
											<td>{{ $producto->codigo->codigo }}</td>
											<td>{{ $producto->bodega->name }}</td>
											<td>{{ $producto->grupo->name }}</td>
											<td>{{ $producto->unidad->name }}</td>
											<td>{{ $producto->ubicacione->name }}</td>
											<td>{{ $producto->conteo1 }}</td>
											<td>{{ $producto->conteo2 }}</td>
											<td>{{ $producto->deferencia12 }}</td>
											<td>{{ $producto->conteo3 }}</td>

                                            <td>
                                                <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('productos.show',$producto->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('productos.edit',$producto->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    @role('admin')
                                                    
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                @endrole
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $productos->links() !!}
            </div>
        </div>
    </div>
@endsection
