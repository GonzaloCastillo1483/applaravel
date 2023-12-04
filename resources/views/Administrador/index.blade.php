@extends('layouts.master')

@section('contenido')

<body>
    <div class="container-fluid">
        <div class="row">
            <form class="d-flex" role="search" action="{{route('administrador.index')}}">
                <input class="form-control me-2" type="search" placeholder="Buscar usuario" aria-label="Search" name="usuario">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>

            <form class="d-flex p-3" role="search" action="{{route('admin.mostrarM')}}">
                <input class="form-control " type="search" placeholder="Buscar Mascota" aria-label="Search" name="perro">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
        <div class="row">
            <div class="col">
                <h3>Cuentas Registradas</h3>
            </div>
        </div>
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="row">
            <!-- tabla -->
            <div class="col-12 col-lg-5 order-last order-lg-first">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            
                            <th >Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente )
                            <tr>
                                <td class="align-middle">{{$cliente->rut_cliente}}</td>
                                <td class="align-middle">{{$cliente->nom_cliente}}</td>
                                <td class="align-middle">{{$cliente->fono}}</td>
                                <td>
                                    <span data-bs-toggle="tooltip" data-bs-title="Borrar {{$cliente->rut_cliente}}">
                                        <button type="button" class="btn btn-sm btn-danger pb-0" data-bs-toggle="modal" data-bs-target="#cuentaBorrarModel{{$cliente->rut_cliente}}">
                                            <span class="material-icons">delete</span>
                                        </button>
                                    </span>

                                    <a href="{{route('clientes.edit',$cliente->rut_cliente)}}" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                        data-bs-title="Editar {{$cliente->nom_cliente}}">
                                        <span class="material-icons">edit</span>
                                    </a>
                                </td>
                            </tr>
                            <div class="modal fade" id="cuentaBorrarModel{{$cliente->rut_cliente}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Borrando usuario..</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                            <div class="modal-body">
                                                ¿Desea borrar a {{$cliente->nom_cliente}}?
                                            </div>
                                            <div class="modal-footer">
                                                <form method="POST" action="{{route('clientes.destroy',$cliente->rut_cliente)}}">
                                                    @csrf
                                                    @if ($cliente->perfil_id==1)
                                                    <button type="button" class="btn btn-primary">No se puede borrar al administrador</button>

                                                    @else
                                                    
                                                    @method('delete')
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-warning">Borrar usuario</button>
                                                    @endif

                                                </form>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-12 col-lg-5 order-last order-lg-first">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id Mascota</th>
                            <th>Nombre</th>
                            <th>Rut Dueño</th>
                            <th colspan="3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mascotas as $mascota )
                            <tr>
                                <td class="align-middle">{{$mascota->cod_mascota}}</td>
                                <td class="align-middle">{{$mascota->nom_mascota}}</td>
                                <td class="align-middle">{{$mascota->rut_cliente}}</td>
                                <td>
                                    <span data-bs-toggle="tooltip" data-bs-title="Borrar {{$mascota->cod_mascota}}">
                                        <button type="button" class="btn btn-sm btn-danger pb-0" data-bs-toggle="modal" data-bs-target="#mascotaBorrarModel{{$mascota->cod_mascota}}">
                                            <span class="material-icons">delete</span>
                                        </button>
                                    </span>

                                    <a href="{{route('clientes.mascotaE',$mascota->cod_mascota)}}" class="btn btn-sm btn-warning pb-0 text-white" data-bs-toggle="tooltip"
                                        data-bs-title="Editar {{$mascota->nom_mascota}}">
                                        <span class="material-icons">edit</span>
                                    </a>
                                </td>
                            </tr>
                            <div class="modal fade" id="mascotaBorrarModel{{$mascota->cod_mascota}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Borrando mascota..</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                            <div class="modal-body">
                                                ¿Desea borrar a {{$mascota->nom_mascota}}?
                                            </div>
                                            <div class="modal-footer">
                                                <form method="POST" action="{{route('mascota.destroy',$mascota->cod_mascota)}}">
                                                    @csrf
                                                    
                                                    @method('delete')
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-warning">Borrar mascota</button>

                                                </form>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
                
                

                    
</body>



@endsection