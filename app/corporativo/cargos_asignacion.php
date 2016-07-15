<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cargos_asignacion extends Model
{
     // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id' ,
    'id_areas',
    'id_personal',
    'id_cargos',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];

}
