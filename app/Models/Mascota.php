<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $table='mascota';
    protected $primaryKey='cod_mascota';
    
    
    public function reservas(){
        return $this->hasMany('App\Models\reserva');
    }

}
