<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datos_familiar extends Model
{
     // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_personal',
    'nombres',
    'parentesco',
    'telefono',
    'direccion',
    'ciudad_fami',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];

}
