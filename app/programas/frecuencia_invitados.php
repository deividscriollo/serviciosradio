<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class frecuencia_invitados extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_dias',
    'inv_const',
    'invitados',
    'semanal',
    'quincenal',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
