<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicioRequest;
use App\Models\servicio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ServicioController extends Controller
{
    public function index(){
        $servicios = servicio::all();
        return view('servicios.index',compact('servicios'));
    }

    public function store(ServicioRequest $request ){
        $servicios=new servicio();
        $servicios->precio=$request->precio;
        $servicios->desc_servicio=$request->desc_servicio;
        $servicios->activo=$request->activo;
        $servicios->save();
        return view('home.show');
    }


    public function show(Request $request){
        $servicios=servicio::all();
        
        return view('servicios.show',compact('servicios'));
    }


    public function destroy(servicio $servicio){
        $servicio->delete();
        return redirect()->route('servicios.show');
    }


    public function edit(servicio $servicios){
        return view('servicios.edit',compact('servicios'));
    }

    public function update(ServicioRequest $request, $codigo_servicio){
        $servicios=servicio::all();
        $servicios=servicio::where('codigo_servicio',$request->input('codigo_servicio'))->first();
        $servicios->precio=$request->precio;
        $servicios->desc_servicio=$request->desc_servicio;
        $servicios->activo=$request->activo;
        $servicios->save();
        return redirect()->route('servicios.show');


    }

    public function mostrarS(Request $request){
        $servicios=servicio::all();
        $servicioo=$request->servicio;
        $Fservicio=DB::table('servicio')->where('codigo_servicio',$servicioo)->get();
        if ($Fservicio->contains('codigo_servicio',$servicioo)) {
            $servicios=DB::table('servicio')->where('codigo_servicio',$servicioo)->get();
        }else{
            $servicios=servicio::all();
        }
        return view('servicios.show',compact('servicios'));
    }
}
