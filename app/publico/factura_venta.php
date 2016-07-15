<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class factura_venta extends Model
{
     // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_clientes',
    'id_usuario',
    'fecha_actual',
    'hora_actual',
    'forma_pago',
    'serie',
    'subtotal',
    'descuento',
    'base_imponible',
    'iva',
    'otros',
    'total_pagar',
    'fecha_anulacion',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
