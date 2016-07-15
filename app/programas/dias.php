<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dias extends Model
{
      // protected $connection="facturanexconex";
    protected $primaryKey="id";
    public $incrementing=false;
    protected $fillable=[
    'id',
    'nombre'];

    // protected $hidden = ['fecha','estado'];
}
