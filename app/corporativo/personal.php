<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class personal extends Model
{
    // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'codigo_personal',
    'codigo_ficha',
    'relacion_dependencia',
    'nombres_completos',
    'cedula_identificacion',
    'fecha_nacimiento',
    'edad',
    'telf_fijo',
    'telf_celular',
    'estado_civil',
    'cargas_familiares',
    'email',
    'instruccion',
    'especialidad',
    'tipo_vivienda',
    'provincia',
    'canton',
    'parroquia',
    'sector',
    'direccion',
    'tipo_sangre',
    'alergia_antibio',
    'enfermedad',
    'fecha_ing_trab',
    'fecha_aplicacion',
    'sueldo',
    'horas_laborar',
    'antecedentes',
    'imagen',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha_creacion','estado'];
}
