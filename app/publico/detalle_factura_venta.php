<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_factura_venta extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_factura_venta',
    'id_paquete',
    'cantidad',
    'valor_unitario',
    'descuento',
    'total_venta',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
