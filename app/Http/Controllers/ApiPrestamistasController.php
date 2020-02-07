<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestamista;

class ApiPrestamistasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $prestamista=Prestamista::all();
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
        $prestamista= new Prestamista;

        $prestamista->nombre=$request->get('nombre');
        $prestamista->apellido_p=$request->get('apellido_p');
        $prestamista->apellido_m=$request->get('apellido_m');
        $prestamista->fecha_nacimiento=$request->get('fecha_nacimiento');
        $prestamista->direccion=$request->get('direccion');
        $prestamista->telefono=$request->get('telefono');
        $prestamista->correo=$request->get('correo');
        $prestamista->telefono=$request->get('telefono');
        
        $prestamista->save();
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
        return $prestamista=Prestamista::find($id);
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
        $prestamista=Prestamista::find($id);
                    //v-model                 base de datos
        $prestamista->nombre=$request->get('nombre');
        $prestamista->apellido_p=$request->get('apellido_p');
        $prestamista->apellido_m=$request->get('apellido_m');
        $prestamista->fecha_nacimiento=$request->get('fecha_nacimiento');
        $prestamista->direccion=$request->get('direccion');
        $prestamista->telefono=$request->get('telefono');
        $prestamista->correo=$request->get('correo');
        $prestamista->telefono=$request->get('telefono');
        
        $prestamista->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         return $prestamista=Prestamista::destroy($id);
    }
}
