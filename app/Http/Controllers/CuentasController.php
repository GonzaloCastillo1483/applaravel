<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Http\Requests\UpdateRequest;
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


    public function store(ClienteRequest $request){
        $cliente=new Cliente();
        $cliente->rut_cliente=$request->rut_cliente;
        $cliente->nom_cliente=$request->nom_cliente;
        $cliente->password=Hash::make($request->password);
        $cliente->fono=$request->fono;
        $cliente->perfil_id=2;
        $cliente->save();

        return view('home.login');

    }
    
    public function login(Request $request){
        
        $credenciales = $request->only('rut_cliente','password');
        if (Auth::attempt($credenciales)){
            
            $cliente = Cliente::where('rut_cliente',$request->rut_cliente)->first();  
            
           
            return redirect()->route('home.show');
        }
        else{
            
            return back()->withErrors('Usuario o contraseña incorrecta');
        }

        
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home.login'); 
    }


    public function destroy(Cliente $cliente){
        $cliente->delete();
        return redirect()->route('administrador.index');
    }

    public function edit(Cliente $cliente){
        return view('clientes.edit',compact('cliente'));
    }

    public function update(Request $request,$rut_cliente){
        $cliente = new Cliente();
        $cliente = Cliente::where('rut_cliente',$request->input('rut_cliente'))->first();
        $cliente->nom_cliente=$request->nom_cliente;
        $cliente->password=Hash::make($request->password);
        $cliente->fono=$request->fono;
        $cliente->perfil_id=2;
        $cliente->save();
        return redirect()->route('administrador.index');
    }
    
}
