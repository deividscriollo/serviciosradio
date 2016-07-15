<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anticipos extends Model
{
   // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_usuario',
    'serie_anticipo',
    'id_personal',
    'monto_anticipo',
    'fecha_anticipo',
    'meses_anticipo',
    'forma_pago',
    'cheque_numero',
    'id_bancos',
    'cuenta_anticipo',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
