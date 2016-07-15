<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_ficha',
    'nombre',
    'telf',
    'email',
    'cargo',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
