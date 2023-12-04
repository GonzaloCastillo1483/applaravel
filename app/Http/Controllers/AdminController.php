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

    public function mostrarM(Request $request){
        $clientes = Cliente::all();
        $mascotas= Mascota::all();
        $perro=$request->perro;
        $perros=DB::table('mascota')->where('nom_mascota',$perro)->get();
        if ($perros->contains('nom_mascota',$perro)) {
            $mascotas=DB::table('mascota')->where('nom_mascota',$perro)->get();
        }else{
            $mascotas=Mascota::all();
        }
        return view('administrador.index',compact(['clientes','mascotas']));
    }

    public function horas(Request $request){
        $mascotas=Mascota::all();
        $reservas = reserva::all();

        $masc_id = $request-> cod_masc;
        $reservas = DB::table('reserva')->select('id','fecha','hora','estado','estado_r','nom_mascota')->join('mascota','cod_mascota','=','cod_masc')->get();
        
        return view('administrador.horas',compact(['reservas','mascotas']));
    }

    
}
