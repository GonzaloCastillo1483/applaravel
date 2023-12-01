<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    protected $table = 'detalle';
    protected $primaryKey = ['cod_serv', 'id_detalle'];
    public $incrementing = false;
    use HasFactory;
}
