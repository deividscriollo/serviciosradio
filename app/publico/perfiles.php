<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perfiles extends Model
{
     // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'nombre',
    'estado',
    'fecha'];

    protected $hidden = ['fecha','estado'];
}
