<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\s\RolesHttp\Response
     */

    public function __construct() { 
        
    }
    
    public function index()
    {
        $roles = Roles::latest()->paginate(5);
    
        return view('roles.index',compact('roles'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('roles.create');
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
    
        Roles::create($request->all());
     
        return redirect()->route('roles.index')
                        ->with('success','created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roles  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Roles $role)
    {
        return view('roles.show',compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roles  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Roles $role)
    {
        return view('roles.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Roles  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roles $role)
    {
        $request->validate([
            'nombre' => 'required',
        ]);
    
        $role->update($request->all());
    
        return redirect()->route('roles.index')
                        ->with('success','updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roles  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roles $role)
    {
        $role->delete();
    
        return redirect()->route('roles.index')
                        ->with('success','deleted successfully');
    }
}
