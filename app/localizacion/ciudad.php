<?php

namespace App\localizacion;

use Illuminate\Database\Eloquent\Model;

class ciudad extends Model
{
  // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_provincia',
    'nom_ciudad',
    'fecha',
    'stado'];

    protected $hidden = ['fecha_creacion','estado'];

    
}
