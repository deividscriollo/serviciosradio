<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_fichas',
    'nombre_confir',
    'porcentaje1',
    'nombre_posible',
    'porcentaje2',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha','estado'];
}
