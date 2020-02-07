<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prestamo;
class ApiPrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $prestamo=Prestamo::all();
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
        $prestamo= new Prestamo;

        $prestamo->prestamo=$request->get('prestamo');
        $prestamo->id_usuario=$request->get('id_usuario');
        $prestamo->id_empleado=$request->get('id_empleado');
        $prestamo->id_pago=$request->get('id_pago');
        $prestamo->id_periodo=$request->get('id_periodo');
        $prestamo->interes=$request->get('interes');
        $prestamo->save();
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
        return $prestamo=Prestamo::find($id);
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
         $prestamo=Prestamo::find($id);
                    //v-model                 base de datos
        $prestamo->prestamo=$request->get('prestamo');
        $prestamo->id_usuario=$request->get('id_usuario');
        $prestamo->id_pago=$request->get('id_pago');
        $prestamo->id_periodo=$request->get('id_periodo');
        $prestamo->id_empleado=$request->get('id_empleado');
        $prestamo->interes=$request->get('interes');
        $prestamo->update();
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
        return $prestamo=Prestamo::destroy($id);
    }
}
