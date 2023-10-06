<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\DB;
use App\Models\Cliente;
use App\Models\Perfil;
use PhpParser\Node\Stmt\Return_;
use App\Helpers\RutHelper;

class CuentasController extends Controller
{
    public function index(){
        $cliente= new Cliente();
        $perfil = new Perfil();
        return view('clientes.index',compact('cliente','perfil'));
    }


    public function store(ClienteRequest $request){
        $cliente=new Cliente();
        $rutSinDV = $request->rut_cliente;
        $dvProvided = substr($rutSinDV, -1); 
        $rutBase = substr($rutSinDV, 0, -1);
    
        $dvCalculated = RutHelper::calcularDigitoVerificador($rutBase);
    
        if ($dvProvided !== $dvCalculated) {
            
            return redirect()->back()->with('error', 'El dígito verificador es incorrecto');
        }
        $cliente->rut_cliente=$request->rut_cliente;
        $cliente->nom_cliente=$request->nom_cliente;

        $contra=$request->contrasena;
        $finalPass=$request->password;

        if($contra!==$finalPass){
            return redirect()->back()->with('error', 'Las contraseñas nos coinciden');
        }


        $cliente->password=Hash::make($finalPass);
        $cliente->fono=$request->fono;
        $cliente->perfil_id=$request->perfil_id;
        $cliente->save();

        

        return view('home.show');

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
        $perfil=new Perfil();
        return view('clientes.edit',compact('cliente','perfil'));
    }

    public function update(UpdateRequest $request,$rut_cliente){
        $cliente = new Cliente();
        $cliente = Cliente::where('rut_cliente',$request->input('rut_cliente'))->first();
        $cliente->nom_cliente=$request->nom_cliente;
        $contra=$request->contrasena;
        $finalPass=$request->password;

        if($contra!==$finalPass){
            return redirect()->back()->with('error', 'Las contraseñas nos coinciden');
        }

        $cliente->password=Hash::make($finalPass);
        $cliente->fono=$request->fono;
        $cliente->perfil_id=$request->perfil_id;
        $cliente->save();
        return redirect()->route('administrador.index');
    }
    
}
