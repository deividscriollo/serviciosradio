<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalles_programa extends Model
{
      // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'id_ficha',
    'horario',
    'demo',
    'contenidos',
    'genero_musical',
    'art_nacional',
    'art_interna',
    'fecha_inicio',
    'tiempo_duracion',
    'codigo',
    'tipo_invitados',
    "musica_años",
    'ingresos_hora',
    'calificacion',
    'objetivo',
    'justificacion',
    'mision',
    'vision',
    'estado',
    'fecha_creacion'];

    protected $hidden = ['fecha','estado'];
}
