@extends('layouts.app')

@section('template_title')
    {{ $ubicacione->name ?? 'Mostrar Ubicaciones' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Ubicaciones</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ubicaciones.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ubicacione->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
