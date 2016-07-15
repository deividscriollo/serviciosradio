<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_contrato extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
      'id',
    'codigo_contrato',
    'nombre_tipo',
    'observaciones',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];

     
}
