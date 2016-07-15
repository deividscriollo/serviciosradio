<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_cuentas_cobrar extends Model
{
       // protected $connection="facturanexconex";
     protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_cuentas_cobrar',
    'fecha_pagos',
    'cuotas',
    'saldo',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
