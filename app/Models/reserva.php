<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table='reserva';

    public function mascota()
    {
     return $this->belongsTo('App\Models\Mascota');;
    }
    
}
