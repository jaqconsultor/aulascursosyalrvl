<?php

namespace App\Http\Controllers;

use App\Models\TipoActividad;
use Illuminate\Http\Request;

class TipoActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() { 
        
    }
    
    public function index()
    {
        $tipoactividad = TipoActividad::latest()->paginate(5);
    
        return view('tipoactividad.index',compact('tipoactividad'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoactividad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
        ]);
    
        TipoActividad::create($request->all());
     
        return redirect()->route('tipoactividad.index')
                        ->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoActividad  $tipoactividad
     * @return \Illuminate\Http\Response
     */
    public function show(TipoActividad $tipoactividad)
    {
        return view('tipoactividad.show',compact('tipoactividad'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoActividad  $tipoactividad
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoActividad $tipoactividad)
    {
        return view('tipoactividad.edit',compact('tipoactividad'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoActividad  $tipoactividad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoActividad $tipoactividad)
    {
        $request->validate([
            'nombre' => 'required',
        ]);
    
        $tipoactividad->update($request->all());
    
        return redirect()->route('tipoactividad.index')
                        ->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoActividad  $tipoactividad
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoActividad $tipoactividad)
    {
        $tipoactividad->delete();
    
        return redirect()->route('tipoactividad.index')
                        ->with('success','deleted successfully');
    }
}
