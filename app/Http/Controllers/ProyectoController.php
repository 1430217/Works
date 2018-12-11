<?php

namespace App\Http\Controllers;

use App\Proyecto;
Use Auth;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index', compact('proyectos'));
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
    public function store()
    {
        $proyecto = new Proyecto();
        $proyecto->nombre = request('nombre');
        $proyecto->descripcion = request('descripcion');
        $proyecto->tipoProyecto = request('tipoProyecto');
        $proyecto->presupuesto = request('presupuesto');
        $proyecto->descripcion = request('descripcion');
        $proyecto->id_empresa = Auth::user()->id;
        $proyecto->nombre_empresa = Auth::user()->name;


        $proyecto->save();
        return redirect('/proyectos/ver_mis_proyecto');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show(Proyecto $proyecto)
    {
        return view('proyectos.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.edit', compact('proyecto'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Proyecto $proyecto)
    {
        
        $proyecto->nombre=request('nombre');
        $proyecto->presupuesto=request('presupuesto');
        $proyecto->tipoProyecto=request('tipoProyecto');
        $proyecto->estado=request('estado');
        $proyecto->descripcion=request('descripcion');
        $proyecto->save();
        return redirect('/proyecto');
      
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyecto $proyecto)
    {
        //
    }
}
