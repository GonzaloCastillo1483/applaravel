<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $table='mascota';
    protected $primaryKey='cod_mascota';

    protected static function boot()
    {
        parent::boot();

        
        static::deleting(function ($mascota) {
            
            $mascota->cliente->delete();
        });
    }
    
    public function reservas(){
        return $this->hasMany('App\Models\reserva');
    }

}
