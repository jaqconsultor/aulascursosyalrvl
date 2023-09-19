<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Consultas_nController extends Controller
{
public $tabla = "consultas_n";
    public $registro = null;

     public function __construct() { 
        
     }
     
     public function index()
     {
        $view ='tablas.crud-'.$this->tabla.'-component';

        return view('layouts.ver-template', [
            'view' => $view
          ]);
     }
 
     public function create()
     {
         return view( 'crud' . $this->tabla.'.create');
     }
 
     public function store(Request $request)
     {
        DB::table($this->tabla)->updateOrInsert(
[ 'numhistoria'  => $request->numhistoria ,'nroconsulta'  => $request->nroconsulta ,'fecha'  => $request->fecha ,'enfermedadactual'  => $request->enfermedadactual ,'peso'  => $request->peso ,'talla'  => $request->talla ,'fc'  => $request->fc ,'pp'  => $request->pp ,'circcefalica'  => $request->circcefalica ,'circtoraxica'  => $request->circtoraxica ,'circabdominal'  => $request->circabdominal ,'tasentado'  => $request->tasentado ,'taacostado'  => $request->taacostado ,'tapie'  => $request->tapie ,'resultadoexamencomp'  => $request->resultadoexamencomp ,'eliminado'  => $request->eliminado ,'faringe'  => $request->faringe ,'nariz'  => $request->nariz ,'oido'  => $request->oido ,'laringe'  => $request->laringe ,'cuello'  => $request->cuello ,'otros'  => $request->otros ,'evolucion'  => $request->evolucion ,'observaciones'  => $request->observaciones ,'medico'  => $request->medico ,'tem_otica'  => $request->tem_otica ,'tem_oral'  => $request->tem_oral ,'tem_axilar'  => $request->tem_axilar  ] 
        );
         return redirect()->route(''.$this->tabla.'.index');
     }
 
     public function show($id)
     {
        $this->registros = DB::table($this->tabla)->where('id', '=', $id)->get();
        $registros = $this->registros;
        return view('crud' . $this->tabla . '.show',compact('registros'));
     }
 
     public function edit($id)
     {
         $this->registros = DB::table($this->tabla)->where('id', '=', $id)->get();
         $registros = $this->registros;
         return view('crud' .$this->tabla .'.edit',compact('registros'));
     }
 
     public function update(Request $request, $id)
     {
        
        $affected = DB::table($this->tabla)->where('id', $id)->update(
[ 'numhistoria'  => $request->numhistoria ,'nroconsulta'  => $request->nroconsulta ,'fecha'  => $request->fecha ,'enfermedadactual'  => $request->enfermedadactual ,'peso'  => $request->peso ,'talla'  => $request->talla ,'fc'  => $request->fc ,'pp'  => $request->pp ,'circcefalica'  => $request->circcefalica ,'circtoraxica'  => $request->circtoraxica ,'circabdominal'  => $request->circabdominal ,'tasentado'  => $request->tasentado ,'taacostado'  => $request->taacostado ,'tapie'  => $request->tapie ,'resultadoexamencomp'  => $request->resultadoexamencomp ,'eliminado'  => $request->eliminado ,'faringe'  => $request->faringe ,'nariz'  => $request->nariz ,'oido'  => $request->oido ,'laringe'  => $request->laringe ,'cuello'  => $request->cuello ,'otros'  => $request->otros ,'evolucion'  => $request->evolucion ,'observaciones'  => $request->observaciones ,'medico'  => $request->medico ,'tem_otica'  => $request->tem_otica ,'tem_oral'  => $request->tem_oral ,'tem_axilar'  => $request->tem_axilar  ] 
        );

         return redirect()->route(''.$this->tabla.'.index');
     }
 
     public function destroy($id)
     {
        $deleted = DB::table($this->tabla)->where('id', '=', $id)->delete();
        $view ='tablas.crud-'.$this->tabla.'-component';

        return view('layouts.ver-template', [
            'view' => $view
          ]);
     }
 
     
}

