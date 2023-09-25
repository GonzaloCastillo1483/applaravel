@extends('layouts.master')

@section('contenido')



<body style="background: linear-gradient(to bottom, #81627d 0%, #b917b9 100%);">
    <div class="container-fluid min-vh-100 d-flex flex-column justify-content-lg-center" >
        <div class="row d-flex flex-column justify-content-center align-items-center ">
            <div class="col-lg-8 bg-white">
                <div class="card">
                    <div class="card-header">
                        Crea tu perfil
                    </div>

                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="user" class="form-label">User</label>
                                <input type="text" id="user" name="user" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" id="nombre" name="nombre" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="apellido" class="form-label">Apellido</label>
                                <input type="text" id="apellido" name="apellido" class="form-control">
                            </div>

                            <div class="mb-3 d-grid gap-2 d-lg-block">
                                <button type ="reset" class="btn btn-danger">Cancelar</button>
                                <button type ="" class="btn btn-success">Enviar datos</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
</body>
@endsection

