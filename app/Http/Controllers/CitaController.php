<?php

namespace App\Http\Controllers;

use App\model\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
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
        $Cita = new Cita();
        $Cita -> id_paciente=$request->pas;
        $Cita -> fecha_cita=$request->fc;
        $Cita -> id_doctor=$request->dr;
        $Cita -> save();

    }

    public function actualizar(Request $request)
    {
        $Cita = Cita::find($request->id);
        $Cita -> id_paciente=$request->actpas;
        $Cita -> fecha_cita=$request->actfc;
        $Cita -> id_doctor=$request->actdr;
        $Cita -> save();

    }
    public function eliminar(Request $request)
    {
        $Cita = Cita::destroy($request->idcita);
    }
    public function leer()
    {
        $citaql=Cita::all();
        return view('cita')->with('cita',$citaql);
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
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit(Cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cita $cita)
    {
        //
    }
}
