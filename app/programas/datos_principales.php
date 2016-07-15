<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datos_principales extends Model
{
     // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_ficha',
    'nombre_proy',
    'ci',
    'telf_fijo',
    'telf_celular',
    'email',
    'direccion',
    'contact_familiar',
    'nom_prog1',
    'nom_prog2',
    'nom_prog3',
    'tipo_progr',
    'publico_obj',
    'tematica',
    'tiempo_dise',
    'ingresado',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha','estado'];
}
