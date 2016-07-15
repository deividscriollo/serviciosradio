<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
     // protected $connection="facturanexconex";
     protected $primaryKey="id_empresa";
    public $incrementing=false;
    protected $fillable=[
 	'id_empresa',
    'nombre_empresa',
    'ruc_empresa',
    'direccion_empresa',
    'telefono_empresa',
    'celular_empresa',
    'pais_empresa',
    'ciudad_empresa',
    'fax_empresa',
    'email_empresa',
    'pagina_web',
    'descripcion',
    'propietario',
    'estado'
    ];

    protected $hidden = ['fecha_creacion','estado'];
}
