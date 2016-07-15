<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuentas_cobrar extends Model
{
        // protected $connection="facturanexconex";
     protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_usuario',
    'id_cliente',
    'id_contrato',
    'fecha_contrato',
    'meses',
    'monto_credito',
    'saldo',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
