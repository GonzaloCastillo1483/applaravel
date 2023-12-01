<?php

namespace App\Http\Controllers;

use App\Helpers\PrecioHelper;
use App\Models\Mascota;
use App\Models\servicio;
use App\Models\Cliente;
use App\Models\Detalle;
use App\Models\reserva;
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
        $horasDisponiblesPorDia = [
            "8AM", "9AM", "10AM", "11AM", "12PM", "1PM", "2PM", "3PM", "4PM", "5PM", "6PM", "7PM"
        ];
        return view('reservas.index',compact('mascotas','servicios','horasDisponiblesPorDia'));

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
        $precioSeleccionado = 0; 
        $codigoServicio= $request->cod_servicio;
        $servicios = DB::table('servicio')->where('codigo_servicio', $codigoServicio)->first();

        if ($servicios) {
            $precioSeleccionado = $servicios->precio;
        }    
        $idReserva = $reservas->id;
        $fechaReserva = $request->fecha;
        $horaReserva = $request->hora;
        $horasDisponiblesPorDia = $this->getHorasDisponiblesPorDia($fechaReserva);
        // if (($key = array_search($horaReserva, $horasDisponiblesPorDia)) !== false) {
        //     // Eliminar la hora reservada del array
        //     unset($horasDisponiblesPorDia[$key]);
        // }
        $tamano=$request->tamaño;
        $esta=$request->estado;
        $servicios = servicio::all();
        $detalle = new Detalle();
        $detalle->cod_serv= $request->cod_servicio;
        $detalle->id_detalle=$idReserva;
        $detalle->precio_final=PrecioHelper::calcularPrecioFinal($precioSeleccionado,$tamano,$esta);
        
        $detalle->save();
        

    

        return view('reservas.index', compact('mascotas','horasDisponiblesPorDia','servicios'))->with('success','Reserva hecha correctamente');
    }


    private function getHorasDisponiblesPorDia($fecha)
    {
        
        return ["8AM", "9AM", "10AM", "11AM", "12PM", "1PM", "2PM", "3PM", "4PM", "5PM", "6PM", "7PM"];
    }

    public function destroy(reserva $reservas){
        $id_key = $reservas->id;
        $detalle_borrar = DB::table('Detalle')->where('id_detalle', $id_key)->delete();
        $reservas->delete();
        return redirect()->route('administrador.index');
    }
}
