<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dias_transmision extends Model
{
   // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_dias',
    'temas',
    'semanal',
    'quincenal',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];

}
