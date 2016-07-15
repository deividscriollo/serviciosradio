<?php

namespace App\localizacion;

use Illuminate\Database\Eloquent\Model;

class pais extends Model
{
    protected $connection="conex_localizacion";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'nom_pais',
    'fecha',
    'stado'];

    protected $hidden = ['fecha_creacion','estado'];
}
