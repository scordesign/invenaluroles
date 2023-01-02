@extends('layouts.app')

@section('template_title')
    {{ $pareja->name ?? 'Show Pareja' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Pareja</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('parejas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $pareja->name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
