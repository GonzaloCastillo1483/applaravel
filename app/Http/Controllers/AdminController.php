<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Detalle;
use App\Models\Mascota;
use App\Models\Perfil;
use App\Models\reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index(Request $request){
        $clientes = Cliente::all();
        $mascotas= Mascota::all();

        $usuario = $request->usuario;
        $usuarios= DB::table('cliente')->where('nom_cliente',$usuario)->get();
        if ($usuarios->contains('nom_cliente',$usuario)) {
            $clientes = DB::table('cliente')->where('nom_cliente',$usuario)->get();
        }
        else{
            $clientes = Cliente::all();
        }

        return view('administrador.index',compact(['clientes','mascotas']));
    }

    public function horas(Request $request){
        $masc=$request->cod_servicio;
        $reservas = reserva::all();
        $mascotas=Mascota::all();
        
        return view('administrador.horas',compact(['reservas','mascotas']));
    }
}
