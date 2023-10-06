<?php
namespace App\Helpers;

class RutHelper {
    public static function calcularDigitoVerificador($rut) {
        $rut = str_replace(".", "", $rut);
        $rut = str_replace("-", "", $rut); 
    
        $rut = strrev($rut); 
        $multiplicadores = [2, 3, 4, 5, 6, 7];
        $suma = 0;
    
        for ($i = 0; $i < strlen($rut); $i++) {
            $suma += intval($rut[$i]) * $multiplicadores[$i % 6];
        }
    
        $digito = 11 - ($suma % 11);
    
        if ($digito == 11) {
            return "0";
        } elseif ($digito == 10) {
            return "K";
        } else {
            return strval($digito);
        }
    }
}






