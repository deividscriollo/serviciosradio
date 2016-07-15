<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\localizacion\pais;

class PaisesController extends Controller
{
    public function getPaises(){
    	$tabla=new pais();
    	$result=$tabla->get();
    	return response()->json($result);
    }
}
