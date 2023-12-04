@extends('layouts.master')

@section('contenido')

<div class="row">
    <div class="col-2 p-4">
    
        <div class="card mb-3 " >
            <div class="card-header">Mascota</div>
            
           
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>codigo mascota: </b>{{$mascota->cod_mascota}}</li>
                <li class="list-group-item"><b>Nombre: </b>{{$mascota->nom_mascota}}</li>
                
                <li class="list-group-item"><b>Raza: </b>{{$mascota->raza}}</li>
                <li class="list-group-item"><b>Edad: </b>{{$mascota->edad}}</li>
                <li class="list-group-item"><b>Tamaño: </b>{{$mascota->tamaño}}</li>
                <li class="list-group-item"><b>Rut Dueño: </b>{{$mascota->rut_cliente}}</li>
                
            </ul>
        </div>
    </div>


    <div class="col-6">

        <div class="card">
            <div class="card-header">
                Editar
            </div>
            <div class="card-body">
                @if(session('error'))
                    <p>ERROR</p>    
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                
                <form method="POST" action="{{route('mascotas.update',$mascota->cod_mascota)}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                    
                        <input type="hidden" id="cod_mmascota" name="cod_mascota" class="form-control" value="{{$mascota->cod_mascota}}">
                    </div>

                    <div class="mb-3">
                        <label for="nom_mascota" class="form-label">Nombre:</label>
                        <input type="text" id="nom_mascota" name="nom_mascota" class="form-control" value="{{$mascota->nom_mascota}}">
                    </div>
                    
                   

                    <div class="mb-3">
                        <label for="raza" class="form-label">Raza:</label>
                        <input type="text" id="raza" name="raza" class="form-control" value="{{$mascota->raza}}">
                    </div>

                    <div class="mb-3">
                        <label for="rut_cliente" class="form-label">Rut Dueño:</label>
                        <input type="text" id="rut_cliente" name="rut_cliente" class="form-control" value="{{$mascota->rut_cliente}}">
                    </div>

                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad:</label>
                        <input type="text" id="edad" name="edad" class="form-control" value="{{$mascota->edad}}">
                    </div>

                    <div class="mb-3">
                        <label for="tamaño" class="form-label">Tamaño de la mascota</label>
                        <select name="tamaño" id="tamaño">
                            <option value="chico">Pequeño</option>
                            <option value="mediano">Mediano</option></option>
                            <option value="grande">Grande</option>
                            


                        </select>
                    </div>

                    <div class="mt-2">
                        <div class="mb-3 d-grid gap-2 d-lg-block">
                           <button type="submit" class="btn btn-success">Actualizar datos</button>
                        </div>
                    </div>
    
                </form>

            </div>
        </div>
    </div>





























@endsection