<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permisos extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_usuario',
    'serie_permiso',
    'ciudad',
    'fecha_permiso',
    'id_personal',
    'id_dirigido',
    'horas',
    'dias',
    'hora_salida',
    'regreso',
    'hora_retorno',
    'tiempo_salida',
    'asunto',
    'lugar',
    'parte_de',
    'cargos_a',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
