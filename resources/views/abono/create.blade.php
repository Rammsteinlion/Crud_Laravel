@extends('layouts.app')

@section('template_title')
    Create Abono
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class=" d-flex justify-content-center">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Abono</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('abonos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('abono.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
