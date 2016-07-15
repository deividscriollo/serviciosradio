<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roll_pago extends Model
{
        // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_personal',
    'id_usuario',
    'codigo_rol',
    'fecha_rol',
    'neto_pagar',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
