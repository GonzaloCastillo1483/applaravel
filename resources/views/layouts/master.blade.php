<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>The Good Pets</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary" style="height: 70px">
        <div class="container-fluid">

            <a class="navbar-brand" href="{{route('home.show')}}">
                <img src="{{asset('images/logo.jpg')}}"  height="30">
            </a>  

            @if (Gate::allows('usuario'))
            <a class="navbar-brand" href="{{route('home.show')}}">Bienvenido/a {{Auth::user()->nom_cliente}}</a>

            @else
            <a class="navbar-brand" href="{{route('home.show')}}">Bienvenido</a>
            @endif
            
          <a class="navbar-brand" href="{{route('home.show')}}">The Good Pets</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mb-2 mb-lg-0 mb-md-0">
              @if (Gate::allows('cliente-listar'))
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('reservas.index')}}">Reservar Horas</a>
              </li>

              @endif
             

              @if (Gate::allows('admin-listar'))
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Acciones
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{route('administrador.horas')}}">Ver horas reservadas</a></li>
                    <li><a class="dropdown-item" href="{{route('administrador.index')}}">Ver Cuentas registradas</a></li>
                    <li><a class="dropdown-item" href="{{route('servicios.index')}}">Agregar servicio</a></li>
                    <li><a class="dropdown-item" href="{{route('servicios.show')}}">Gestionar servicios</a></li>


                  </ul>

                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('clientes.index')}}">Crear cuenta</a>
                  </li>
                  
                </li>


              @endif
              @if(Gate::allows('usuario'))
                <li class="nav-item">
                <b></b>
                </li>
              @else
                <a class="nav-link active" aria-current="page" href="{{route('home.login')}}">Inicia sesion</a>  
              @endif  
             
              @if (Gate::allows('cliente-listar'))
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('clientes.mascota')}}">Agregar mascotas</a>
              </li>
              @endif

              <form class="d-flex">
                <a href="{{route('clientes.logout')}}" class="btn btn-danger">Cerrar Sesión</a>
              </form>
             
            </ul>

            {{-- <form class="d-flex">
              <a href="{{route('clientes.logout')}}" class="btn btn-danger">Cerrar Sesión</a>
            </form> --}}
            
          </div>
        </div>
      </nav>
      @yield('contenido')






























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src ="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>