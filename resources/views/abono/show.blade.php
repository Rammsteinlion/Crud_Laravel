@extends('layouts.app')

@section('template_title')
    {{ $abono->name ?? 'Show Abono' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Info de Abono</span>
                        </div>
                        <br>
                        <div class="float-right">
                            <a class="btn btn-warning" href="{{ route('abonos.index') }}"> Atras</a>
                        </div>
                    </div>
                        <br>
                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $abono->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $abono->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $abono->monto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
