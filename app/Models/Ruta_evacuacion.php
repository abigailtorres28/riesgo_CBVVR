<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ruta_evacuacion extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'ruta_evacuacion',
        'salidas_emergencia',
        'observaciones',
        'escaleras',
        'señalizadas',
        'barandas',
        'condicion_escaleras',
        'condicion_señalizadas',
        'condicion_barandas',
        'condicion_antideslizante',
        'observaciones_escaleras'
    ];


    public function concept()
    {
                            ////modelo///////////////// clave primaria del modelo///////clave foranea en la tabla actual
        return $this->hasOne('App\Models\Concept', 'id_ruta', 'id');
    }
}