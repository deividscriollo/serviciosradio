<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\publico\usuarios;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Auth;

class loginController extends Controller
{
    
public function login(Request $request) {

$tabla=new usuarios();
$auth = Auth::guard('web');
 $credentials = array('email' => $request->input('email'), 'password' => $request->input('password'));

if ( ! $token = $auth->attempt($credentials)) {
       return response()->json(["error"=>"404"],200);
   }
$datos=$tabla->select('id')->where('email','=',$request->input('email'))->first();
$token = JWTAuth::fromUser($datos);
return response()->json(["token"=>$token],200);

}

public function logoutE(Request $request){

            $tabla=new usuarios();
            $datos=$tabla->select('email')->where('remember_token','=',$request->input('token'))->get();

  $user = JWTAuth::parseToken()->authenticate();
  
    JWTAuth::setToken($request->input('token'))->invalidate();
    $tabla->where('email', '=', $user['email'])->update(['remember_token' => '']);
// echo $datos['email'];

    return response()->json(true, 200);
}
}
