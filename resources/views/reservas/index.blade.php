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

                            <form action="POST" action="{{route('reservas.store')}}">
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
                                
                                <div class = "mb-3">  
                                    <div>  
                                        <div>   
                                            <input type = "date" name = "fecha" id="fecha">  
                                            <select name="hora" id="hora">
                                                <option value="">8AM</option>
                                                <option value="">9AM</option>
                                                <option value="">10AM</option>
                                                <option value="">11AM</option>
                                                <option value="">12AM</option>
                                                <option value="">1PM</option>
                                                <option value="">2PM</option>
                                                <option value="">3PM</option>
                                                <option value="">4PM</option>
                                                <option value="">5PM</option>
                                                <option value="">6PM</option>
                                                <option value="">7PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <select name="cod_servicio" id="cod_servicio">
                                        <option value="">Selecciona el servicio que deseas</option>
                                        @foreach ($servicios as $servicio )
                                            <option value="{{$servicio->codigo_servicio}}">{{$servicio->desc_servicio}}  ${{$servicio->precio}}  </option>
                                        @endforeach
                                    </select>
                                </div>
    
                                <div class="mb-3 d-grid gap-2 d-lg-block">
                                    <button type ="submit" class="btn btn-success">Enviar datos</button>
                                </div>
                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>




@endsection