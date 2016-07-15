<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fichas extends Model
{
    
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
 	'id',
    'id_programa',
    'cod_ficha',
    'estado',
    'fecha'
    ];
    protected $hidden = ['estado'];
}
