<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Abono;


class ApiAbonosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return $abono=Abono::all();
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
        
        $abono = new Abono;
        $abono->pago=$request->get('pago');
        $abono->fecha_pago=$request->get('fecha_pago');
        $abono->saldo=$request->get('saldo');

        $abono->save();
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
        return $abono=Abono::find($id);
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
        $abono=Abono::find($id);

        $abono->pago=$request->get('pago');
        $abono->fecha_pago=$request->get('fecha_pago');
        $abono->saldo=$request->get('saldo');

        $abono->update();
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
        return $abono=Abono::destroy($id);
    }
}
