<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contrato extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
     'id',
    'id_empresa',
    'id_cliente',
    'id_tipo_contrato',
    'id_paquete',
    'fecha_inicio_contrato',
    'fecha_fin_contrato',
    'duracion_contrato',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha','estado'];
}
