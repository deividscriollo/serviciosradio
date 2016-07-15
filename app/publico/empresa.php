<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'ruc_empresa',
    'propietario',
    'nombre_empresa',
    'slogan',
    'telefono1',
    'telefono2',
    'ciudad',
    'direccion',
    'correo',
    'fax',
    'sitio_web',
    'autorizacion_sri',
    'inicio_fac_preimpresa',
    'item_factura',
    'imagen',
    'observaciones',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
