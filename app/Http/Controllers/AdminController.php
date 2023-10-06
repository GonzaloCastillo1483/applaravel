<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Mascota;
use App\Models\Perfil;
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
}
