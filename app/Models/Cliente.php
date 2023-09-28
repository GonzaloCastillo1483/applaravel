<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Authenticable
{
    use HasFactory;
    protected $table= 'cliente';
    protected $primaryKey='rut_cliente';
    public $incrementing = false;

    public function perfil(){
        return $this->belongsTo('App\Models\perfil');
    }

}
