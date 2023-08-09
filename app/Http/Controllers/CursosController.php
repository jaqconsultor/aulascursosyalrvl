<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\s\CursosHttp\Response
     */

    public function __construct() { 
        
    }
    
    public function index()
    {
        $cursos = Cursos::latest()->paginate(5);
    
        return view('cursos.index',compact('cursos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
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
            'nivel' => 'required',
            'subnivel' => 'required',
            'area' => 'required',
            'imagen' => 'required',
            'objetivo' => 'required',
            'user_id' => 'required',
            'activo' => 'required',
            ]);
    
        Cursos::create($request->all());
     
        return redirect()->route('cursos.index')
                        ->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cursos  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Cursos $curso)
    {
        return view('cursos.show',compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cursos  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Cursos $curso)
    {
        return view('cursos.edit',compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cursos  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cursos $curso)
    {
        $request->validate([
            'numero' => 'required',
            'nombre' => 'required',
            'nivel' => 'required',
            'subnivel' => 'required',
            'area' => 'required',
            'imagen' => 'required',
            'objetivo' => 'required',
            'user_id' => 'required',
            'activo' => 'required',
        ]);
    
        $curso->update($request->all());
    
        return redirect()->route('cursos.index')
                        ->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cursos  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cursos $curso)
    {
        $curso->delete();
    
        return redirect()->route('cursos.index')
                        ->with('success','deleted successfully');
    }
}
