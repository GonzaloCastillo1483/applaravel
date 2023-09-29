<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservasController extends Controller
{
    public function index(){

        $mascotas=Mascota::all();
        $servicios = servicio::all();
        return view('reservas.index',compact('mascotas','servicios'));

        // $rut_cliente=Auth::user()->rut_cliente;
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


    // public function show(){
    //     $rut_cliente=Auth::user()->rut_cliente;
    //     $cliente=DB::table('cliente')->where('perfil_id',2)->get();
    //     if($cliente->contains('rut_cliente',$rut_cliente)){
    //         $mascota=DB::table('macota')->where('rut_cliente',$rut_cliente);
    //     }
    //     else{
    //         $mascota=Mascota::all();
    //     }
    //     return view('home.show',compact(['cliente','mascota']));
    // }
}
