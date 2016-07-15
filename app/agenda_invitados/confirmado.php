<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class confirmado extends Model
{
      // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=['id',
    'id_ficha',
    'check_confirmado' ,
    'confirmado_por' ,
    'fecha',
    'hora',
    'forma',
    'confirmado_con',
    'responsable',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
