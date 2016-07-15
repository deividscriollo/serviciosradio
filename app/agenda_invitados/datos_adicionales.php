<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datos_adicionales extends Model
{
    // protected $connection="facturanexconex";
     protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
 	'id',
    'id_ficha',
    'pregunta1',
    'pregunta2',
    'pregunta3',
    'pregunta4',
    'pregunta5',
    'pregunta6',
    'hora_llegada',
    'tiempo_entrevista',
    'director',
    'conduccion',
    'calificacion',
    'sugerencia',
    'observaciones',
    'estado',
    'fecha_creacion'
    ];

    protected $hidden = ['fecha_creacion','estado'];    

}
