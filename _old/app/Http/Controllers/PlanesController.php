<?php

namespace App\Http\Controllers;

use App\Models\Planes;
use Illuminate\Http\Request;

class PlanesController extends Controller
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
        $planes = Planes::latest()->paginate(5);
    
        return view('planes.index',compact('planes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planes.create');
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
    
        Planes::create($request->all());
     
        return redirect()->route('planes.index')
                        ->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Planes  $plane
     * @return \Illuminate\Http\Response
     */
    public function show(Planes $plane)
    {
        return view('planes.show',compact('plane'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Planes  $plane
     * @return \Illuminate\Http\Response
     */
    public function edit(planes $plane)
    {
        return view('planes.edit',compact('plane'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Planes  $plane
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planes $plane)
    {
        $request->validate([
            'nombre' => 'required',
        ]);
    
        $plane->update($request->all());
    
        return redirect()->route('planes.index')
                        ->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Planes  $plane
     * @return \Illuminate\Http\Response
     */
    public function destroy(planes $plane)
    {
        $plane->delete();
    
        return redirect()->route('planes.index')
                        ->with('success','deleted successfully');
    }
}
