<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class imagenes extends Model
{
   // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
 	'id',
    'id_ficha',
    'nombre_imagen',
    'estado',
    'fecha_creacion'
    ];
    protected $hidden = ['fecha_creacion','estado'];
}
