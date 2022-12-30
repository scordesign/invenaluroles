@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Mostrar conteo X Producto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar conteo X Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre o Codigo:</strong>
                            {{ $producto->name_id }}
                        </div>
                        <div class="form-group">
                            <strong>Bodega:</strong>
                            {{ $producto->bodega_id }}
                        </div>
                        <div class="form-group">
                            <strong>Grupo:</strong>
                            {{ $producto->grupo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Unidad:</strong>
                            {{ $producto->unidad_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $producto->ubicacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Conteo 1:</strong>
                            {{ $producto->conteo1 }}
                        </div>
                        <div class="form-group">
                            <strong>Conteo 2:</strong>
                            {{ $producto->conteo2 }}
                        </div>
                        <div class="form-group">
                            <strong>Deferencia :</strong>
                            {{ $producto->deferencia12 }}
                        </div>
                        <div class="form-group">
                            <strong>Conteo 3:</strong>
                            {{ $producto->conteo3 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
