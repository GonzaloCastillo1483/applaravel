<?php
namespace App\Helpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PrecioHelper{
    public static function calcularPrecioFinal($precio,$tam,$est){
        $precio1=0;
        $precio2=0;
        $final=0;
        
        $mascota=DB::table('mascota')->where('tamaño', $tam)->first();
        if ($mascota) {
            $tama=$mascota->tamaño;
        }

        if ($tam=='mediano') {
            $precio1=$precio*0.2;
        }

        if ($tam=='chico') {
            $precio1=0;
        }

        if ($tam=='grande') {
            $precio1=$precio*0.5;
        }

        if ($est=='amotado') {
            $precio2=10000;
        }

        if ($est=='nudoso') {
            $precio2=4000;
        }

        if ($est=='pulgoso') {
            $precio2=5000;
        }

        if ($est=='sucio') {
            $precio2=5000;
        }
        if ($est=='nada') {
            $precio2=0;
        }
        $final=$precio+$precio1+$precio2;
        return $final;




    }




}