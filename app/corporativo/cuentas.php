<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuentas extends Model
{
     // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_bancos',
    'id_personal',
    'numero',
    'nombre_cuenta',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];

}
