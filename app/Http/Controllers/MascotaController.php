<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;

use App\Http\Requests\UpdateRequest;
use Illuminate\Http\RedirectResponse;
use App\Models\Mascota;
use Illuminate\Http\Request;
use App\Http\Requests\MascotaRequest;
use App\Http\Requests\UpdateMascotaRequest;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;

class MascotaController extends Controller
{
    public function index(){
        return view('clientes.mascota');
    }

    public function store(MascotaRequest $request){
        $mascota=new Mascota();
        $mascota->nom_mascota=$request->nom_mascota;
        $mascota->raza=$request->raza;
        // $nombre_mascota = $request->input('nom_mascota');
        // if ($nombre_mascota == Null) {
            
        //     return redirect()->back()->with('error', '¨Porfavor coloque el nombre de mascota');
        // }else{
        //     $mascota->nom_mascota = $request->nom_mascota;
        // }
        $mascota->rut_cliente=Auth::user()->rut_cliente;
        
        // $raza_mascota = $request->input('raza');
        // if ($raza_mascota == Null) {
            
        //     return redirect()->back()->with('error', '¨Porfavor coloque la raza de la mascota');
        // }else{
        //     $mascota->raza = $request->raza;
        // }

        // $edad_mascota = $request->input('edad');
        // if ($edad_mascota == Null) {
            
        //     return redirect()->back()->with('error', 'Porfavor coloque la edad de la mascota');
        // }else{
        //     $mascota->edad=$request->edad;
        // }
        $mascota->edad=$request->edad;
        $mascota->tamaño=$request->tamaño;
        
        $mascota->save();
        //return view('home.show');
        return redirect()->back()->with('success', 'Mascota guardada con exito');
    }

    public function destroy(mascota $Mascota){
        $id_key = $Mascota->cod_mascota;
        $masc_key = DB::table('reserva')->where('cod_masc', $id_key)->first();
        if($masc_key != Null){
            return redirect()->back()->with('error', 'esta mascota tiene una reserva pendiente');
        } else{
            $Mascota->delete();
            return view('home.show');
        }
    }


    public function edit(Mascota $mascota){
        return view('clientes.mascotaE',compact('mascota'));
        
    }

    public function update(UpdateMascotaRequest $request,$cod_mascota){
        $mascota=Mascota::all();
        $mascota=Mascota::where('cod_mascota',$request->input('cod_mascota'))->first();
        $mascota->nom_mascota=$request->nom_mascota;
        $mascota->raza=$request->raza;
        
        $rut=$request->rut_cliente;
        if ($rut==null) {
            return back()->with('error','Ingresa el rut del dueño');
        }
        else{
            $Frut=DB::table('cliente')->where('rut_cliente',$rut)->first();
            if ($Frut) {
                $mascota->rut_cliente=$rut;
            }else{
                return back()->with('error', 'Este rut no existe en el sistema');
            }
            $mascota->edad=$request->edad;
            $mascota->tamaño=$request->tamaño;
            $mascota->save();
            return redirect()->route('administrador.index');
        }
        
    }
}
