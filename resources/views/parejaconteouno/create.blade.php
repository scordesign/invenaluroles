@extends('layouts.app')

@section('template_title')
    Create Parejaconteouno
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Parejaconteouno</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('parejaconteounos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('parejaconteouno.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
