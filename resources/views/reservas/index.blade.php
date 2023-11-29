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
                        
                            <div class="mb-3">
                                <div class="mb-3 p-3">
                                    @if (Gate::allows('usuario'))
                                        <small>{{Auth::user()->nom_cliente}}, selecciona a la mascota que desees</small>

                                    @else
                                        <a class="navbar-brand" href="#">Bienvenido</a>
                                    @endif
                                </div>
                            </div>

                            <form method="POST" action="{{route('reservas.store')}}">
                                @csrf
                                
                                <div class="mb-3">
                                        <select name="cod" id="cod">
                                            <option>Selecciona tu mascota</option>
                                            @foreach ($mascotas as $mascota )
                                                <option value="{{$mascota->cod_mascota}}">{{$mascota->nom_mascota}}</option>
                                            @endforeach
                                        </select>
                                </div>
                               

                                <div class="mb-3">
                                    <label for="tamaño" class="form-label">Estado de la mascota</label>
                                    <input type="text" id="estado" name="estado" class="form-control">
                                </div>
                                
                                <div class = "mb-3">  
                                    <div>  
                                        <div>   
                                            <input type = "date" name = "fecha" id="fecha">  
                                            <select name="hora" id="hora">
                                                <option value="8AM">8AM</option>
                                                <option value="9AM">9AM</option>
                                                <option value="10AM">10AM</option>
                                                <option value="11AM">11AM</option>
                                                <option value="12PM">12PM</option>
                                                <option value="1PM">1PM</option>
                                                <option value="2PM">2PM</option>
                                                <option value="3PM">3PM</option>
                                                <option value="4PM">4PM</option>
                                                <option value="5PM">5PM</option>
                                                <option value="5PM">6PM</option>
                                                <option value="7PM">7PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="mb-3">
                                    <select name="cod_servicio" id="cod_servicio">
                                        <option value="">Selecciona el servicio que deseas</option>
                                        @foreach ($servicios as $servicio )
                                            <option value="{{$servicio->codigo_servicio}}">{{$servicio->desc_servicio}}  ${{$servicio->precio}}  </option>
                                        @endforeach
                                    </select>
                                </div>
     --}}
                                <div class="mb-3 d-grid gap-2 d-lg-block">
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