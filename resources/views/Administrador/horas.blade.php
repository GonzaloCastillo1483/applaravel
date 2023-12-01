@extends('layouts.master')

@section('contenido')

<body>
    <div class="container-fluid">
        <div class="row">
            <label>Reservas</label>
        </div>
        <div class="row">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <th>id</th>
                    <th>fecha</th>
                    <th>hora</th>
                    <th>mascota</th>
                    <th>estado</th>
                    <th>acciones</th>
                </thead>
                <tbody>
                    @foreach ($reservas as $reserva)
                    <tr>
                        <td class="align-middle">{{$reserva->id}}</td>
                        <td class="align-middle">{{$reserva->fecha}}</td>
                        <td class="align-middle">{{$reserva->hora}}</td>
              
                        <td class="align-middle">
                            {{$reserva->cod_masc}} 
                        </td>
                        <td class="align-middle">{{$reserva->estado}}</td>
                        <td>
                            <span data-bs-toggle="tooltip" data-bs-title="Borrar detalles de esta reserva">
                                <button type="button" class="btn btn-sm btn-danger pb-0" data-bs-toggle="modal" data-bs-target="#borrardetallemodel{{$reserva->id}}">
                                    <span class="material-icons">delete</span>
                                </button>
                            </span>
                        </td>
                    </tr>
                    <div class="modal fade" id="borrardetallemodel{{$reserva->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Borrando detalles..</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                    <div class="modal-body">
                                        ¿Desea borrar los detalles de esta reserva?
                                    </div>
                                    <div class="modal-footer">
                                        <form method="POST" action="{{route('reservas.destroy',$reserva->id)}}">
                                            @csrf
                                            
                                            @method('delete')
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-warning">Borrar detalle</button>

                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection