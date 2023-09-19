<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Examen_fisico_nuevo_copyController extends Controller
{
public $tabla = "examen_fisico_nuevo_copy";
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'talla'  => $request->talla ,'peso'  => $request->peso ,'mamas'  => $request->mamas ,'tiroides'  => $request->tiroides ,'abdomen'  => $request->abdomen ,'extremidades'  => $request->extremidades ,'cardiopulmonar'  => $request->cardiopulmonar ,'genitales_externos'  => $request->genitales_externos ,'especulos'  => $request->especulos ,'tacto_vaginal'  => $request->tacto_vaginal ,'tacto_rectal'  => $request->tacto_rectal ,'colposcopia'  => $request->colposcopia ,'tension'  => $request->tension ,'general'  => $request->general ,'neurologico'  => $request->neurologico ,'mama_derecha'  => $request->mama_derecha ,'total_g'  => $request->total_g ,'total_f'  => $request->total_f ,'total_general'  => $request->total_general  ] 
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'talla'  => $request->talla ,'peso'  => $request->peso ,'mamas'  => $request->mamas ,'tiroides'  => $request->tiroides ,'abdomen'  => $request->abdomen ,'extremidades'  => $request->extremidades ,'cardiopulmonar'  => $request->cardiopulmonar ,'genitales_externos'  => $request->genitales_externos ,'especulos'  => $request->especulos ,'tacto_vaginal'  => $request->tacto_vaginal ,'tacto_rectal'  => $request->tacto_rectal ,'colposcopia'  => $request->colposcopia ,'tension'  => $request->tension ,'general'  => $request->general ,'neurologico'  => $request->neurologico ,'mama_derecha'  => $request->mama_derecha ,'total_g'  => $request->total_g ,'total_f'  => $request->total_f ,'total_general'  => $request->total_general  ] 
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

