<?php

namespace App\localizacion;

use Illuminate\Database\Eloquent\Model;

class provincia extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_pais',
    'nom_provincia',
    'fecha',
    'stado'];

    protected $hidden = ['fecha','estado'];
}
