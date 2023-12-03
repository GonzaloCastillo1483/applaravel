<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table='reserva';
    protected $attributes = [
        'estado' => 'pendiente',
    ];
    protected $fillable = ['fecha','hora','estado'];

    public function mascota()
    {
     return $this->belongsTo('App\Models\Mascota');;
    }
    
}
