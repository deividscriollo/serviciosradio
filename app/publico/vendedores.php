<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vendedores extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'codigo_vendedor',
    'id_personal',
    'id_tipo_vendedor',
    'fecha_asignacion',
    'imagen',
    'observaciones',
    'estado',
    'fecha_creaacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
