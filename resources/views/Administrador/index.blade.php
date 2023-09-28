@extends('layouts.master')

@section('contenido')

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h3>Cuentas Registradas</h3>
            </div>
        </div>

        <div class="row">
            <!-- tabla -->
            <div class="col-12 col-lg-5 order-last order-lg-first">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Rut</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            
                            <th colspan="3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente )
                            <tr>
                                <td class="align-middle">{{$cliente->rut_cliente}}</td>
                                <td class="align-middle">{{$cliente->nom_cliente}}</td>
                                <td class="align-middle">{{$cliente->fono}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-12 col-lg-5 order-last order-lg-first">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id Mascota</th>
                            <th>Nombre</th>
                            <th>Rut Dueño</th>
                            
                            <th colspan="3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mascotas as $mascota )
                            <tr>
                                <td class="align-middle">{{$mascota->cod_mascota}}</td>
                                <td class="align-middle">{{$mascota->nom_mascota}}</td>
                                <td class="align-middle">{{$mascota->rut_cliente}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
                
                

                    
</body>



@endsection