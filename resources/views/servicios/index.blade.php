@extends('layouts.master')

@section('contenido')


<div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
    <div class="row d-flex flex-column justify-content-center align-items-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    Agregar un Servicio
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

                    <form method="POST" action="{{route('servicios.store')}}">
                        @csrf

                        <div class="mb-3">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="text" id="precio" name="precio" class="form-control" value="{{old('precio')}}">
                        </div>

                        <div class="mb-3">
                            <label for="desc_servicio" class="form-label">Descripcion del servicio</label>
                            <input type="text" id="desc_servicio" name="desc_servicio" class="form-control" value="{{old('desc_servicio')}}">
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
                            <button type ="submit" class="btn btn-success">Enviar datos</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>


















@endsection