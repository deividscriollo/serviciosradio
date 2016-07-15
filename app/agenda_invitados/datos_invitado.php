<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datos_invitado extends Model
{
    // protected $connection="facturanexconex";
     protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
 	'id',
    'id_ficha',
    'nom_invitado',
    'contacto',
    'inst_empresa',
    'telefono1',
    'telefono2',
    'telefono3',
    'direccion',
    'email',
    'tema_principal',
    'tema_secundario',
    'asistente1',
    'asistente2',
    'estado',
    'fecha_creacion'
    ];

    protected $hidden = ['fecha_creacion','estado'];
}
