<?php

namespace App\Http\Controllers;

use App\Models\formatoarchivo;
use Illuminate\Http\Request;

class FormatoArchivoController extends Controller
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
        $formatoarchivo = FormatoArchivo::latest()->paginate(5);
    
        return view('formatoarchivo.index',compact('formatoarchivo'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('formatoarchivo.create');
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
    
        FormatoArchivo::create($request->all());
     
        return redirect()->route('formatoarchivo.index')
                        ->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formatoarchivo  $formatoarchivo
     * @return \Illuminate\Http\Response
     */
    public function show(formatoarchivo $formatoarchivo)
    {
        return view('formatoarchivo.show',compact('formatoarchivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formatoarchivo  $formatoarchivo
     * @return \Illuminate\Http\Response
     */
    public function edit(formatoarchivo $formatoarchivo)
    {
        return view('formatoarchivo.edit',compact('formatoarchivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\formatoarchivo  $formatoarchivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, formatoarchivo $formatoarchivo)
    {
        $request->validate([
            'nombre' => 'required',
        ]);
    
        $formatoarchivo->update($request->all());
    
        return redirect()->route('formatoarchivo.index')
                        ->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formatoarchivo  $formatoarchivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(formatoarchivo $formatoarchivo)
    {
        $formatoarchivo->delete();
    
        return redirect()->route('formatoarchivo.index')
                        ->with('success','deleted successfully');
    }
}
