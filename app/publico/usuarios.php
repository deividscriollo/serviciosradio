<?php

namespace App\publico;

use Illuminate\Foundation\Auth\User as Authenticatable;

class usuarios extends Authenticatable
{
    protected $connection="conex_publico";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_perfil',
    'nombres_completos',
    'cedula',
    'telefono',
    'celular',
    'email',
    'ciudad',
    'direccion',
    'usuario',
    'clave',
    'imagen',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
