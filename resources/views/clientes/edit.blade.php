@extends('layouts.master')

@section('contenido')
<div class="row">
    <div class="col-2 p-4">
    
        <div class="card mb-3">
            <div class="card-header">Usuario</div>
            
           
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Rut: </b>{{$cliente->rut_cliente}}</li>
                <li class="list-group-item"><b>Nombre: </b>{{$cliente->nom_cliente}}</li>
                
                <li class="list-group-item"><b>Fono: </b>{{$cliente->fono}}</li>
                <li class="list-group-item"><b>Rol: </b>{{$cliente->perfil_id}}</li>
    
            </ul>
        </div>
    </div>

    <div class="col-6">
        <div class="card">
            <div class="card-header">
                Editar
            </div>
            @if ($errors->any())
                        
                <div class="alert alert-danger">
                    
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            
            @if(session('error'))
                <p>ERROR</p>    
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <form method="POST" action="{{route('clientes.update',$cliente->rut_cliente)}}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    
                    <input type="hidden" id="rut_cliente" name="rut_cliente" class="form-control" value="{{$cliente->rut_cliente}}">
                </div>

                <div class="mb-3">
                    <label for="nom_cliente" class="form-label">Nombre:</label>
                    <input type="text" id="nom_cliente" name="nom_cliente" class="form-control" value="{{$cliente->nom_cliente}}">
                </div>

                <div class="mb-3">
                    <label for="contrasena" class="form-label">Nueva Contraseña:</label>
                    <input type="password" id="contrasena" name="contrasena" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Confirma Contraseña:</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="fono" class="form-label">Telefono</label>
                    <input type="text" id="fono" name="fono" class="form-control" value="{{$cliente->fono}}">
                </div>

                <div class="form-group">
                    <label for="perfil_id">Perfil</label>
                    <div>
                        <div class="form-ckeck form-check-inline">
                            <input type="radio" class="form-check-input" id="per-administrador" name="perfil_id" value="1" @if($cliente->perfil_id==1) checked @endif>
                                
                            
                            <label class="form-check-label" for="per-administrador">Administrador</label>

                        
                        </div>

                        <div class="form-ckeck form-check-inline">
                            <input type="radio" class="form-check-input" id="per-cliente" name="perfil_id" value="2" @if($cliente->perfil_id==2) checked @endif>
                                
                            
                            <label class="form-check-label" for="per-administrador">Cliente</label>

                        
                        </div>
                    </div>
                </div>

                <div class="mt-2">
                    <div class="mb-3 d-grid gap-2 d-lg-block">
                        <button type ="reset" class="btn btn-warning">Cancelar</button>
                        <button type ="submit" class="btn btn-success">Actualizar Datos</button>
                    </div>
                </div>

            </form>

        </div>
    </div>

</div>






@endsection