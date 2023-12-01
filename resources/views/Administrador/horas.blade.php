@extends('layouts.master')

@section('contenido')

<body>
    <div class="container-fluid">
        <div class="row">
            <label>Reservas</label>
        </div>
        <div class="row">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <th>id</th>
                    <th>fecha</th>
                    <th>hora</th>
                    <th>mascota</th>
                    <th>estado</th>
                </thead>
                <tbody>
                    @foreach ($reservas as $reserva)
                    <tr>
                        <td class="align-middle">{{$reserva->id}}</td>
                        <td class="align-middle">{{$reserva->fecha}}</td>
                        <td class="align-middle">{{$reserva->hora}}</td>
              
                        <td class="align-middle">
                            {{$reserva->cod_masc}} 
                        </td>
                        <td class="align-middle">{{$reserva->estado}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
@endsection