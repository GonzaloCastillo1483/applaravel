<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\servicio;
use App\Models\Cliente;
use App\Models\reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ReservasController extends Controller
{
    public function index(){
        $rut=Auth::user()->rut_cliente;
        $mascotas=DB::table('mascota')->where('rut_cliente',$rut)->get();
        $servicios = servicio::all();
        return view('reservas.index',compact('mascotas','servicios'));

        $rut_cliente=Auth::user()->rut_cliente;
        // $clientes=DB::table('cliente')->where('perfil_id',2)->get();
        // if($clientes->contains('rut_cliente',$rut_cliente)){
        //     $mascota=DB::table('mascota')->where('rut_cliente',$rut_cliente);
        // }
        // else{
        //     $mascota=Mascota::all();
        // }
        // return view('reservas.index',compact(['clientes','mascota']));
        // //return view('reservas.index');
    }


//    public function show(){
//         $mascotas= Mascota::all();
//         $clientes=Cliente::all();
//         $rut=Auth::user()->rut_cliente;
//         $cliente = DB::table('mascota')->where('rut_cliente',$rut)->get();
//         if ($cliente->contains('rut_cliente',$rut)) {
//             $mascotas=DB::table('mascota')->where('rut_cliente',$rut)->get();
//         }


//    }
    public function store(Request $request){
        $reservas=new Reserva();
        $reservas->cod_mascota=$request->cod_mascota;
        $reservas->fecha=$request->fecha;
        $reservas->hora=$request->hora;
        $reservas->cod_servicio=$request->id;
        $reservas->estado=$request->null;


        $reservas->save();
        return view('home.show');
    }
}
