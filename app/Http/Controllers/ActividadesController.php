<?php

namespace App\Http\Controllers;

use App\Models\Actividades;
use Illuminate\Http\Request;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\s\ActividadesHttp\Response
     */

    public function __construct() { 
        
    }
    
    public function index()
    {
        $actividades = Actividades::latest()->paginate(5);
    
        return view('actividades.index',compact('actividades'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actividades.create');
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
            'numero' => 'required',
            'nombre' => 'required',
            'curso_id' => 'required',
            'tema_id' => 'required',
            'tipo_actividad_id' => 'required',
            'formato_archivo_id' => 'required',
            'nombre_recurso' => 'required',
            'activo' => 'required',
            ]);
    
        Actividades::create($request->all());
     
        return redirect()->route('actividades.index')
                        ->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actividades  $actividade
     * @return \Illuminate\Http\Response
     */
    public function show(Actividades $actividade)
    {
        return view('actividades.show',compact('actividade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actividades  $actividade
     * @return \Illuminate\Http\Response
     */
    public function edit(Actividades $actividade)
    {
        return view('actividades.edit',compact('actividade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actividades  $actividade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividades $actividade)
    {
        $request->validate([
            'numero' => 'required',
            'nombre' => 'required',
            'curso_id' => 'required',
            'tema_id' => 'required',
            'tipo_actividad_id' => 'required',
            'formato_archivo_id' => 'required',
            'nombre_recurso' => 'required',
            'activo' => 'required',
        ]);
    
        $actividade->update($request->all());
    
        return redirect()->route('actividades.index')
                        ->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actividades  $actividade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividades $actividade)
    {
        $actividade->delete();
    
        return redirect()->route('actividades.index')
                        ->with('success','deleted successfully');
    }
}
