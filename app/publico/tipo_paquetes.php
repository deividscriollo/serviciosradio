<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_paquetes extends Model
{
      // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'nombre_paquete',
    'observaciones',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
