<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class privilegios extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_usuario',
    'data',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha','estado'];
}
