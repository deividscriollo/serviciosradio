<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genero_musical extends Model
{
       // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_genero',
    'genero',
    'porcentaje',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
