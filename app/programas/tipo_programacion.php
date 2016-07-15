<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_programacion extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
     'id',
    'id_programa',
    'porcentaje',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
