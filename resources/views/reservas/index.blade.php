@extends('layouts.master')

@section('contenido')

<body>
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <div class="row d-flex flex-column justify-content-center align-items-center">
            <div class="col-lg-8 bg-white">
                <div class="card">
                    <div class="card-header">
                        Toma de Horas
                    </div>
                    <div class="card-boy">
                        <form method="" action="">
                            @csrf
                            <div class="mb-3">
                                <div class="mb-3 p-3">
                                    @if (Gate::allows('usuario'))
                                        <small>{{Auth::user()->nom_cliente}}, selecciona a la mascota que desees</small>

                                    @else
                                        <a class="navbar-brand" href="#">Bienvenido</a>
                                    @endif
                                </div>
                            </div>

                            <form action="">
                                <div class="mb-3">
                                    <select name="cod_mascota" id="cod_mascota">
                                        <option value="">Selecciona tu mascota</option>
                                        @foreach ($mascotas as $mascota )
                                            <option value="{{$mascota->cod_mascota}}">{{$mascota->nom_mascota}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </form>
                            

                            <div class="mb-3">
                                <select name="codigo_servicio" id="cod_mascota">
                                    <option value="">Selecciona el servicio que deseas</option>
                                    @foreach ($servicios as $servicio )
                                        <option value="{{$servicio->codigo_servicio}}">{{$servicio->desc_servicio}}  ${{$servicio->precio}}  </option>
                                    @endforeach
                                </select>
                            </div>

                          
                          
                            


                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


</body>




@endsection