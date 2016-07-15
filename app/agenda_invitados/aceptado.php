<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aceptado extends Model
{
	// protected $connection="facturanexconex";
     protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=['id',
    'id_ficha',
    'check_aceptado' ,
    'contactado_por' ,
    'fecha',
    'hora',
    'forma',
    'contactado_con',
    'responsable',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];


}
