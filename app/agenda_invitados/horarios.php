<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horarios extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
 	'id',
    'id_ficha',
    'hora_llegada',
    'tiempo_entrevista',
    'director',
    'conduccion',
    'estado',
    'fecha_creacion'
    ];
    protected $hidden = ['fecha_creacion','estado'];
}
