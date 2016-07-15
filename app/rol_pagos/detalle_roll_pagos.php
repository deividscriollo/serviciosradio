<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_roll_pagos extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
     'id',
    'id_rol_pagos',
    'horas',
    'dias_laborados',
    'dias_no_laborados',
    'extras',
    'sueldo_mes',
    'horas_extras',
    'comisiones',
    'decimo_tercero',
    'decimo_cuarto',
    'total_ingresos',
    'aporte_iess',
    'quirografarios',
    'anticipos',
    'atrasos',
    'permisos',
    'faltas',
    'multas',
    'total_descuentos',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
