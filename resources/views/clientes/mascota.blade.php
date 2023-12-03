@extends('layouts.master')

@section('contenido')


<body>
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <div class="row d-flex flex-column justify-content-center align-items-center">
            <div class="col-lg-8 bg-white ">
                <div class="card">
                    <div class="card-header">
                        Agrega a tus mascota
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


                        @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                        @endif

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                         @endif


                        <form method="POST" action="{{route('mascota.store')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="nom_mascota" class="form-label">Nombre de la mascota</label>
                                <input type="text" id="nom_mascota" name="nom_mascota" class="form-control" value="{{old('nom_mascota')}}">
                            </div>

                            <div class="mb-3">
                                <label for="raza" class="form-label">Raza de la mascota</label>
                                <input type="text" id="raza" name="raza" class="form-control" value="{{old('raza')}}">
                            </div>

                            <div class="mb-3">
                                <label for="edad" class="form-label">edad de la mascota</label>
                                <input type="text" id="edad" name="edad" class="form-control" value="{{old('edad')}}">
                            </div>

                            <div class="mb-3">
                                <label for="tamaño" class="form-label">tamaño de la mascota</label>
                                <select name="tamaño" id="tamaño">
                                    <option value="chico">Pequeño</option>
                                    <option value="mediano">Mediano</option></option>
                                    <option value="grande">Grande</option>
                                    


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

</body>









@endsection