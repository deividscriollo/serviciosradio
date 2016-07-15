<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class segmentos extends Model
{
   // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_ficha',
    'nombre',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
