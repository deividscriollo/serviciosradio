<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cursos extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_personal',
    'nombre',
    'establecimiento',
    'tiempo',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
