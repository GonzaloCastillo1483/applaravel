<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    use HasFactory;
    protected $table = 'servicio';
    protected $primaryKey = 'codigo_servicio';
    protected $fillable = ['codigo_servicio', 'precio', 'desc_servicio', 'activo'];
    
}
