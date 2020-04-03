<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use Session;
use Redirect;
use Cache;
use Cookie;

class AccesoController extends Controller
{
    //
    public function validar(Request $request) {
    	$usuario=$request->usuario;
    	$password=$request->contraseña;

    	$resp = Empleado::where('usuario','=',$usuario)
    	->where('password','=',$password)
    	->get();

    	

    	if (count($resp)>0)
        {
            $user=$resp[0]->nombre.' '.$resp[0]->apellido_p.' '.$resp[0]->apellido_m;
            Session::put('usuario',$user);
            Session::put('id_empleado',$resp[0]->id_empleado);
            return Redirect::to('administrador');
            // Sesion::put('rol',$resp[0]->rol->rol);
            // Sesion::put('foto',$resp[0]->foto);

            // if($resp[0]->rol->rol=="Administrador")
            //     return Redirect::to('admin');

            // elseif ($resp[0]->rol->rol=="Supervisor")
            //     return Redirect::to('admin');

            // elseif ($resp[0]->rol->rol=="Vendedor")
            //     return Redirect::to('admin');
        }

        else
        {
            return "USUARIO Y CONTRASEÑA INCORRECTA";
        }
     }

        public function salir() {
            Session::flush();
            Session::reflash();
            Cache::flush();
            Cookie::forget('laravel_sesion');
            unset($_COOKIE);
            unset($_SESSION);
            return Redirect::to('/');
     }
}

