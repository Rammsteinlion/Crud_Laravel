@extends('layouts.app')

@section('template_title')
    Abono
@endsection

@section('content')
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Abono') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('abonos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo Registro') }}
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
                                        
										<th>Nombre</th>
										<th>Telefono</th>
										<th>Monto</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($abonos as $abono)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $abono->nombre }}</td>
											<td>{{ $abono->telefono }}</td>
											<td>{{ $abono->monto }}</td>

                                            <td>
                                                <form action="{{ route('abonos.destroy',$abono->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('abonos.show',$abono->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('abonos.edit',$abono->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $abonos->links() !!}
            </div>
        </div>
    </div>
@endsection
