<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estructura_prog extends Model
{
   // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'text',
	'id_ficha',
	'horas',
	'actividad',
	'responsable',
	'estado',
	'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
