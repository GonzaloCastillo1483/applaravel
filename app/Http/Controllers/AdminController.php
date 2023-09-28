<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Mascota;
use App\Models\Perfil;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        $mascotas= Mascota::all();
        
        return view('administrador.index',compact(['clientes','mascotas']));
    }
}
