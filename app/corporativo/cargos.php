<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cargos extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'nombre',
    'observaciones',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];

  
}
