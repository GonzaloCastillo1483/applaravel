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

                               
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif


                           


                          

                            <form method="POST" action="{{route('reservas.store')}}">
                                @csrf
                                
                                <div class="mb-3">
                                    <label for="mascota" class="form-label">Selecciona tu mascota</label>
                                        <select name="cod" id="cod">
                                            
                                            @foreach ($mascotas as $mascota )
                                                <option value="{{$mascota->cod_mascota}}">{{$mascota->nom_mascota}}</option>
                                            @endforeach
                                        </select>
                                </div>
                               

                                <div class="mb-3">
                                    <label for="tamaño" class="form-label">Estado de la mascota</label>
                                    <select name="estado" id="estado">
                                        <option value="nada">En buen estado</option>
                                        <option value="amotado">Amotado</option>
                                        <option value="nudoso">Con nudos</option></option>
                                        <option value="pulgoso">Pulgoso</option>
                                        <option value="sucio">Muy sucio</option>


                                    </select>
                                </div>
                                
                                <div class = "mb-3">  
                                    <div>  
                                        <div>   
                                            <input type = "date" name = "fecha" id="fecha" min="{{ date('Y-m-d') }}" required>  
                                            <select name="hora" id="hora">
                                                @foreach ($horasDisponiblesPorDia as $hora )
                                                    <option value="{{$hora}}">{{$hora}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Selecciona el servicio que deseas</label>
                                    <select name="cod_servicio" id="cod_servicio">
                                        
                                        @foreach ($servicios as $servicio )
                                            <option value="{{$servicio->codigo_servicio}}">{{$servicio->desc_servicio}}  ${{$servicio->precio}}  </option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                
     
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