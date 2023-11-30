<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\servicio;
use App\Models\Cliente;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function Laravel\Prompts\search;

class ReservasController extends Controller
{
    public function index(){
        $rut=Auth::user()->rut_cliente;
        $mascotas=DB::table('mascota')->where('rut_cliente',$rut)->get();
        $servicios = servicio::all();
        $horas = [
            "8AM", "9AM", "10AM", "11AM", "12PM", "1PM", "2PM", "3PM", "4PM", "5PM", "6PM", "7PM"
        ];
        return view('reservas.index',compact('mascotas','servicios','horas'));

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
        $NuevaFecha=$request->fecha;
        $NuevaHora=$request->hora;
        $NoDisponible=Reserva::where('fecha',$NuevaFecha)->where('hora', $NuevaHora)->first();
        if ($NoDisponible) {
            return back()->with('error', 'La hora seleccionada ya existe, por favor seleccione otra hora');
        }
        $reservas=new Reserva();
        $rut=Auth::user()->rut_cliente;
        $mascotas=DB::table('mascota')->where('rut_cliente',$rut)->get();
        $reservas->fecha= $NuevaFecha;
        $reservas->hora=$NuevaHora;
        $reservas->cod_masc=$request->cod;
        $reservas->estado=$request->estado;
        

        
        


        $reservas->save();
        $fechaReserva = $request->fecha;
        $horaReserva = $request->hora;

        $horas = [
            "8AM", "9AM", "10AM", "11AM", "12PM", "1PM", "2PM", "3PM", "4PM", "5PM", "6PM", "7PM"
        ];

        

        

        if ($key=array_search($horaReserva, $horas)!==false) {
            unset($horas[$key]);
        }

        return view('reservas.index', compact('mascotas','horas'))->with('success','Reserva hecha correctamente');
    }
}
