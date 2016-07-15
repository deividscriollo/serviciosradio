<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programas extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
 	'id',
    'codigo',
    'nombre',
    'estado',
    'fecha_creacion'
    ];
    protected $hidden = ['fecha_creacion','estado'];
    
}
