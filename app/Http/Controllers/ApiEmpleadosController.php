<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
class ApiEmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $empleado=Empleado::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $empleado = new Empleado;
        $empleado->password=$request->get('password');
        $empleado->nombre=$request->get('nombre');
        $empleado->apellido_p=$request->get('apellido_p');
        $empleado->apellido_m=$request->get('apellido_m');
        $empleado->direccion=$request->get('direccion');
        $empleado->RFC=$request->get('RFC');
        $empleado->fecha_ingreso=$request->get('fecha_ingreso');
        $empleado->categoria=$request->get('categoria');
        $empleado->fecha_nacimiento=$request->get('fecha_nacimiento');
        $empleado->sexo=$request->get('sexo');

        $empleado->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       return $empleado=Empleado::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $empleado=Empleado::find($id);

        $empleado->password=$request->get('password');
        $empleado->nombre=$request->get('nombre');
        $empleado->apellido_p=$request->get('apellido_p');
        $empleado->apellido_m=$request->get('apellido_m');
        $empleado->direccion=$request->get('direccion');
        $empleado->RFC=$request->get('RFC');
        $empleado->fecha_ingreso=$request->get('fecha_ingreso');
        $empleado->categoria=$request->get('categoria');
        $empleado->fecha_nacimiento=$request->get('fecha_nacimiento');
        $empleado->sexo=$request->get('sexo');

        $empleado->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $empleado=Empleado::destroy($id);
    }
}
