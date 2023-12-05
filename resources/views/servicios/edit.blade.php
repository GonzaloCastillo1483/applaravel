@extends('layouts.master')

@section('contenido')
<div class="row">
    <div class="col-2 p-4">
    
        <div class="card mb-3 " >
            <div class="card-header">Servicio</div>
            
           
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Codigo Servicio: </b>{{$servicios->codigo_servicio}}</li>
                <li class="list-group-item"><b>Descripcion: </b>{{$servicios->desc_servicio}}</li>
                
                <li class="list-group-item"><b>Precio: </b>{{$servicios->precio}}</li>
                <li class="list-group-item"><b>Activo: </b>{{$servicios->activo}}</li>
                
            </ul>
        </div>
    </div>

    <div class="col-6">
        <div class="card">
            <div class="card-header">
                Editar
            </div>
            <div class="card-body">
                @if ($errors->any())

                        <div class="alert alert-danger">
                                <p>ERROR </p>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                @endif     </div>
                <form method="POST" action="{{route('servicios.update',$servicios->codigo_servicio)}}">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                    
                        <input type="hidden" id="codigo_servicio" name="codigo_servicio" class="form-control" value="{{$servicios->codigo_servicio}}">
                    </div>

                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio</label>
                        <input type="text" id="precio" name="precio" class="form-control" value="{{$servicios->precio}}">
                    </div>

                    <div class="mb-3">
                        <label for="desc_servicio" class="form-label">Descripcion del servicio</label>
                        <input type="text" id="desc_servicio" name="desc_servicio" class="form-control" value="{{$servicios->desc_servicio}}">
                    </div>

                    <div class="mb-3">
                        <label for="activo" class="form-label">Activo</label>
                        <select name="activo" id="activo">
                            <option value="si">Si</option>
                            <option value="no">No</option>
                            


                        </select>
                    </div>

                    <div class="mb-3 d-grid gap-2 d-lg-block">
                        <button type ="reset" class="btn btn-danger">Cancelar</button>
                        <button type ="submit" class="btn btn-success">Actualizar datos</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
















@endsection