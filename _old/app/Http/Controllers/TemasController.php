<?php

namespace App\Http\Controllers;

use App\Models\Temas;
use Illuminate\Http\Request;

class TemasController extends Controller
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
        $tema = Temas::latest()->paginate(5);
    
        return view('temas.index',compact('tema'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temas.create');
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
    
        Temas::create($request->all());
     
        return redirect()->route('temas.index')
                        ->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\temas  $tema
     * @return \Illuminate\Http\Response
     */
    public function show(temas $tema)
    {
        return view('temas.show',compact('tema'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\temas  $tema
     * @return \Illuminate\Http\Response
     */
    public function edit(temas $tema)
    {
        return view('temas.edit',compact('tema'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\temas  $tema
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, temas $tema)
    {
        $request->validate([
            'nombre' => 'required',
        ]);
    
        $tema->update($request->all());
    
        return redirect()->route('temas.index')
                        ->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\temas  $tema
     * @return \Illuminate\Http\Response
     */
    public function destroy(temas $tema)
    {
        $tema->delete();
    
        return redirect()->route('temas.index')
                        ->with('success','deleted successfully');
    }
}
