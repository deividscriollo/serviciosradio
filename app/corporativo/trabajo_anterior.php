<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trabajo_anterior extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_personal',
    'nomre_empresa',
    'cargo',
    'direccion',
    'telf_fijo',
    'telf_celular',
    'nombre_jefe',
    'tiempo_trab',
    'ciudad',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];

}
