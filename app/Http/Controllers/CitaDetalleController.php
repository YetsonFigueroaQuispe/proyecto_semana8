<?php

namespace App\Http\Controllers;

use App\model\Cita_Detalle;
use Illuminate\Http\Request;

class CitaDetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }



 //EXAMEN

 public function insertar(Request $request)
 {
     $Cita_Detalle = new Cita_Detalle();
     $Cita_Detalle -> id_cita=$request->cit;
     $Cita_Detalle -> save();

 }

 public function actualizar(Request $request)
 {
     $Cita_Detalle = Cita_Detalle::find($request->id);
     $Cita_Detalle -> id_cita=$request->cita;
     $Cita_Detalle -> save();

 }
 public function eliminar(Request $request)
 {
    $Cita_Detalle = Cita_Detalle::destroy($request->idcitadetalle);
 }
 public function leer()
 {
    $citadetalle=Cita_Detalle::all();
    return view('citadetalle')->with('citadetalle',$citadetalle);

 }

 //FINAL
    



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cita_Detalle  $cita_Detalle
     * @return \Illuminate\Http\Response
     */
    public function show(Cita_Detalle $cita_Detalle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cita_Detalle  $cita_Detalle
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita_Detalle $cita_Detalle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cita_Detalle  $cita_Detalle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita_Detalle $cita_Detalle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cita_Detalle  $cita_Detalle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita_Detalle $cita_Detalle)
    {
        //
    }
}
