<?php

namespace App\Http\Controllers;
use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;

class MascotaController extends Controller
{
    public function index(){
        return view('clientes.mascota');
    }

    public function store(Request $request){
        $mascota=new Mascota();
        $mascota->nom_mascota=$request->nom_mascota;
        $mascota->rut_cliente=Auth::user()->rut_cliente;
        $mascota->raza=$request->raza;
        $mascota->edad=$request->edad;
        $mascota->tamaño=$request->tamaño;
        
        $mascota->save();
        return view('home.show');
    }

}
