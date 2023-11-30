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
                                            <input type = "date" name = "fecha" id="fecha" min="{{ date('Y-m-d') }}" required>  
                                            <select name="hora" id="hora">
                                                @foreach ($horas as $hour )
                                                    <option value="{{$hour}}">{{$hour}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                {{-- 
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