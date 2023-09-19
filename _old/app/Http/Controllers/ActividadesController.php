<?php

namespace App\Http\Controllers;

use App\Models\Actividades;
use App\Models\FormatoArchivo;
use App\Models\Temas;
use App\Models\TipoActividad;

use Illuminate\Http\Request;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\s\ActividadesHttp\Response
     */

     private $tema, $tipo_actividad, $formato_archivo;


    public function __construct() { 
        


    }
    
    public function index()
    {
        $actividades = Actividades::latest()->paginate(5);
    
        return view('actividades.index',compact('actividades'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function cursosactividades($curso_id)
    {
        $actividades = Actividades::where('curso_id',$this->$curso_id)->latest()->paginate(5);
    
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

        $tema = Temas::all();
        $tipo_actividad = TipoActividad::all();
        $formato_archivo = FormatoArchivo::all();

        $tema_id = '<div class="mb-3">
        <label for="tema_id" class="form-label">tema_id</label>
        <select class="form-select form-select-lg" name="tema_id" id="tema_id">';

        foreach ($tema as $valor) {
            $tema_id = $tema_id . '<option value="'.$valor->id.'">'.$valor->nombre.'</option>';
        }
        $tema_id = $tema_id . '</select>
    </div>';
    
        $tipo_actividad_id = '<div class="mb-3">
        <label for="tipo_actividad_id" class="form-label">tipo_actividad_id</label>
        <select class="form-select form-select-lg" name="tipo_actividad_id" id="tipo_actividad_id">';

        foreach ($tipo_actividad as $valor) {
            $tipo_actividad_id = $tipo_actividad_id . '<option value="'.$valor->id.'">'.$valor->nombre.'</option>';
        }

        $tipo_actividad_id = $tipo_actividad_id . '</select>
    </div>';

   
        $formato_archivo_id = '<div class="mb-3">
        <label for="formato_archivo_id" class="form-label">formato_archivo_id</label>
        <select class="form-select form-select-lg" name="formato_archivo_id" id="formato_archivo_id">';

        foreach ($formato_archivo as $valor) {
            $formato_archivo_id = $formato_archivo_id . '<option value="'.$valor->id.'">'.$valor->nombre.'</option>';
        }

        $formato_archivo_id = $formato_archivo_id . '</select>
        </div>';

          return view('actividades.create')->with([
            'tema_id' => $tema_id,
            'tipo_actividad_id' => $tipo_actividad_id,
            'formato_archivo_id' => $formato_archivo_id 
          ]);
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
        
        $tema = Temas::all();
        $tipo_actividad = TipoActividad::all();
        $formato_archivo = FormatoArchivo::all();
        $selected = "";

        $tema_id = '<div class="mb-3">
        <label for="tema_id" class="form-label">tema_id</label>
        <select class="form-select form-select-lg" name="tema_id" id="tema_id">';

        foreach ($tema as $valor) {
            $selected = "";
            if( $valor->id == $actividade->tema_id ) {
                $selected = "selected";
            }
            $tema_id = $tema_id . '<option value="'.$valor->id.'"' . $selected . '>'.$valor->nombre.'</option>';
        }
        $tema_id = $tema_id . '</select>
    </div>';
    
        $tipo_actividad_id = '<div class="mb-3">
        <label for="tipo_actividad_id" class="form-label">tipo_actividad_id</label>
        <select class="form-select form-select-lg" name="tipo_actividad_id" id="tipo_actividad_id">';

        foreach ($tipo_actividad as $valor) {
            $selected = "";
            if( $valor->id == $actividade->tema_id ) {
                $selected = "selected";
            }
            $tipo_actividad_id = $tipo_actividad_id . '<option value="'.$valor->id.'"' . $selected . '>'.$valor->nombre.'</option>';
        }

        $tipo_actividad_id = $tipo_actividad_id . '</select>
    </div>';

   
        $formato_archivo_id = '<div class="mb-3">
        <label for="formato_archivo_id" class="form-label">formato_archivo_id</label>
        <select class="form-select form-select-lg" name="formato_archivo_id" id="formato_archivo_id">';

        foreach ($formato_archivo as $valor) {
            $selected = "";
            if( $valor->id == $actividade->tema_id ) {
                $selected = "selected";
            }
            $formato_archivo_id = $formato_archivo_id . '<option value="'.$valor->id.'"' . $selected . '>'.$valor->nombre.'</option>';
        }

        $formato_archivo_id = $formato_archivo_id . '</select>
        </div>';

          return view('actividades.edit')->with([
            'actividade'  => $actividade,
            'tema_id' => $tema_id,
            'tipo_actividad_id' => $tipo_actividad_id,
            'formato_archivo_id' => $formato_archivo_id 
          ]);
    
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
