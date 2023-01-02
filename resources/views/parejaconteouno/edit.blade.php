@extends('layouts.app')

@section('template_title')
    Update Parejaconteouno
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Parejaconteouno</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('parejaconteounos.update', $parejaconteouno->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('parejaconteouno.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
