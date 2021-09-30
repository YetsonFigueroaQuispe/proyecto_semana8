<?php

namespace App\Http\Controllers;

use App\model\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
     //EXAMEN

     public function insertar(Request $request)
     {
         $Doctor = new Doctor();
         $Doctor -> ape_nom=$request->apenom;
         $Doctor -> dni=$request->dni;
         $Doctor -> especialidad=$request->espec;
         $Doctor -> save();
 
     }
 
     public function actualizar(Request $request)
     {
         $Doctor = Doctor::find($request->id);
         $Doctor -> ape_nom=$request->actapenom;
         $Doctor -> dni=$request->actdni;
         $Doctor -> especialidad=$request->actespec;
         $Doctor -> save();
 
     }
     public function eliminar(Request $request)
     {
        $Doctor = Doctor::destroy($request->iddoctor);
     }
     public function leer()
     {
        $doctor=Doctor::all();
        return view('doctor')->with('doctor',$doctor);
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
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
