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
                    <div class="card-body">


                        
                         
                        
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

                           
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
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
                                        <option value="buen estado">En buen estado</option>
                                        <option value="amotado">Amotado</option>
                                        <option value="nudoso">Con nudos</option></option>
                                        <option value="pulgoso">Pulgoso</option>
                                        <option value="sucio">Muy sucio</option>


                                    </select>
                                </div>
                                
                                <div class = "mb-3">  
                                    <div>  
                                        <div> 
                                            <label for="" class="form-label">Selecciona la fecha que desee</label>  
                                            <input type = "date" name = "fecha" id="fecha" min="{{ date('Y-m-d') }}" required>  
                                            <label for="" class="form-label">Selecciona la hora que desee</label>
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
                                            <option value="{{$servicio->codigo_servicio}}">{{$servicio->desc_servicio}}  ${{$servicio->precio}} || Servicio activo: {{$servicio->activo}}  </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <span>El precio del servicio depende del estado del perro:</span>
                                            <br>
                                            <span>Amotado: +$10000</span>
                                            <br>
                                            <span>Con nudos: +$4000</span>
                                            <br>
                                            <span>pulgoso: +$5000</span>
                                            <br>
                                            <span>Muy sucio: +$5000</span>
        
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <span>Tambien el precio depende del tamaño:</span>
                                        <br>
                                        <span>Pequeño: no varía el precio</span>
                                        <br>
                                        <span>Mediano: +20%</span>
                                        <br>
                                        <span>Grande: +50%</span>



                                    </div>
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