<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bancos extends Model
{
     // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'nombre',
    'telefono',
    'direccion',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
