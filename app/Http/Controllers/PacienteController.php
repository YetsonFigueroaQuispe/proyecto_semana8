<?php

namespace App\Http\Controllers;

use App\model\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
     //EXAMEN

     public function insertar(Request $request)
     {
         $Paciente = new Paciente();
         $Paciente -> ape_nom=$request->apenom;
         $Paciente -> dni=$request->dn;
         $Paciente -> celular=$request->celu;
         $Paciente -> save();
 
     }
 
     public function actualizar(Request $request)
     {
         $Paciente = Paciente::find($request->idpaciente);
         $Paciente -> ape_nom=$request->actapenom;
         $Paciente -> dni=$request->actdni;
         $Paciente -> celular=$request->actcelu;
         $Paciente -> save();
 
     }
     public function eliminar(Request $request)
     {
        $Paciente = Paciente::destroy($request->idpaciente);
     }
     public function leer()
     {
        $pacientesql=Paciente::all();
        return view('paciente')->with('paciente',$pacientesql);
     }
 
     //FINAL





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
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //
    }
}
