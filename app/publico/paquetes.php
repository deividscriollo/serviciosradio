<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paquetes extends Model
{
         // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_tipo_paquete',
    'codigo',
    'descripcion',
    'precio',
    'descuento',
    'suma_mes',
    'observaciones',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
