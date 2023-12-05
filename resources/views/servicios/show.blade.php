@extends('layouts.master')

@section('contenido')

<div class="row">
     <form class="d-flex p-3" role="search" action="{{route('servicios.mostrarS')}}">
        <input class="form-control " type="search" placeholder="Buscar Servicio por codigo" aria-label="Search" name="servicio">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
     </form> 
    <div class="col-sm-12">
        <table class="table table-bordered table-striped table-hover ">
            <thead>
                <tr>
                    <th>Codigo de servicio</th>
                    <th>Precio</th>
                    <th>Descripcion del servicio</th>
                    <th>Activo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicios as $servicio)
                    <tr>
                        <td class="align-middle">{{$servicio->codigo_servicio}}</td>
                        <td class="align-middle">${{$servicio->precio}}</td>
                        <td class="align-middle">{{$servicio->desc_servicio}}</td>
                        <td class="align-middle">{{$servicio->activo}}</td>
                        <td>
                            <span data-bs-toggle="tooltip" data-bs-title="Borrar {{$servicio->codigo_servicio}}">
                                <button type="button" class="btn btn-sm btn-danger pb-0" data-bs-toggle="modal" data-bs-target="#servicioBorrarModel{{$servicio->codigo_servicio}}">
                                    <span class="material-icons">delete</span>
                                </button>
                            </span>

                            <a href="{{route('servicios.edit',$servicio->codigo_servicio)}}" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                data-bs-title="Editar {{$servicio->desc_servicio}}">
                                <span class="material-icons">edit</span>
                            </a>


                        </td>


                    </tr>
                    <div class="modal fade" id="servicioBorrarModel{{$servicio->codigo_servicio}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Borrando servicio..</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                    <div class="modal-body">
                                        ¿Desea borrar a {{$servicio->desc_servicio}}?
                                    </div>
                                    <div class="modal-footer">
                                        <form method="POST" action="{{route('servicios.destroy',$servicio->codigo_servicio)}}">
                                            @csrf
                                            
                                            @method('delete')
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-warning">Borrar servicio</button>

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








@endsection