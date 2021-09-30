<?php

namespace App\Http\Controllers;

use App\model\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
     //EXAMEN

     public function insertar(Request $request)
     {
         $Usuario = new Usuario();
         $Usuario -> ape_nom=$request->ape;
         $Usuario -> usuario=$request->usu;
         $Usuario -> password=$request->pass;
         $Usuario -> save();
 
     }
 
     public function actualizar(Request $request)
     {
         $Usuario = Usuario::find($request->idusuario);
         $Usuario -> ape_nom=$request->actape;
         $Usuario -> usuario=$request->actusu;
         $Usuario -> password=$request->actpass;
         $Usuario -> save();
 
     }
     public function eliminar(Request $request)
     {
        $Usuario = Usuario::destroy($request->idusuario);
     }
     public function leer()
     {
        $usuaariosql=Usuario::all();
        return view('usuario')->with('usuariosql',$usuaariosql);
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
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
