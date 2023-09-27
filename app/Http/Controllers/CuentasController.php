<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use PhpParser\Node\Stmt\Return_;

class CuentasController extends Controller
{
    public function index(){
        return view('clientes.index');
    }


    public function store(Request $request){
        $cliente=new Cliente();
        $cliente->rut_cliente=$request->rut_cliente;
        $cliente->nom_cliente=$request->nom_cliente;
        $cliente->password=$request->password;
        $cliente->fono=$request->fono;
        $cliente->perfil_id=2;
        $cliente->save();

        return view('home.show');

    }
        
    
}
