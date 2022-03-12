@extends('layouts.app')

@section('template_title')
    Update Abono
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="d-flex justify-content-center">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Abono</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('abonos.update', $abono->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('abono.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
