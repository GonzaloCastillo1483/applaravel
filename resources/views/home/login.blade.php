<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Inciar Sesión</title>
</head>
<body style="background: linear-gradient(to bottom, #660066 0%, #ff99cc 100%);">
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="row bg-light" style="height: 25rem;">
                    <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center" style="background: linear-gradient(to bottom, #460066 0%, #d699ff 100%);">
                        <div class="bg-white p-2 mb-3 rounded">
                            <img src="{{asset('images/logo.jpg')}}" alt="The Good Pets" style="width: 7rem;">
                        </div>
                        <h4 class="text-light">The Good Pets</h4>
                        <h4 class="text-light">Peluqueria Canina</h4>
                    </div>



                    <div class="col-lg-8 bg-white">
                        <h4>Inicio de Sesion</h4>
                        <small>Ingresa tu cuenta o Crea una</small>
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="{{route('clientes.login')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="rut_cliente" class="form-label">Rut</label>
                                        <input type="text" id="rut_cliente" name="rut_cliente" class="form-control">
                                    </div>



                                    <div class="mb-3">
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>

                                   

                                    <div class="mb-3 text-end">
                                
                                        <button type="submit" class="btn btn-success" hr>Iniciar Sesión</button>
                                        
                                    </div>

                                    <div>
                                        <a href="{{route('clientes.index')}}">¿No estas registrado? haz click aqui para registrarte.</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @if($errors->any())
                        <div class="alert alert-warning mt-2">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                            
                        </div>
                    @endif
                   
                    </div>
                </div>

            </div>
        </div>

    </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>