<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programa extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_tipo_programa',
    'codigo_programa',
    'nombre_programa',
    'hora_inicio',
    'hora_fin',
    'imagen',
    'observaciones',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
