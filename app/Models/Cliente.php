<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table= 'cliente';
    protected $primaryKey='rut_cliente';
    public $incrementing = false;

    public function perfil(){
        return $this->belongsTo('App\Models\perfil');
    }

}
