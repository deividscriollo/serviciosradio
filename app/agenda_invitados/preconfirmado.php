<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preconfirmado extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
 	'id',
    'id_ficha',
    'check_preconfirmado',
    'preconfirmado_por',
    'fecha',
    'hora',
    'forma',
    'preconfirmado_con',
    'responsable',
    'estado',
    'fecha_creacion'
    ];
    protected $hidden = ['fecha_creacion','estado'];
}
