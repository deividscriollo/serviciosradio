<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contratos_selectivos extends Model
{
     // protected $connection="facturanexconex";
     protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_usuario',
    'id_cliente',
    'codigo_contrato',
    'id_tipo_contrato',
    'id_tipo_paquete',
    'id_paquete',
    'duracion_contrato',
    'fecha_inicio',
    'fecha_final',
    'id_programa',
    'bonificacion',
    'fecha_contrato',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
