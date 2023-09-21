<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Eco_pelvicoController extends Controller
{
public $tabla = "eco_pelvico";
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
[ 'numhistoria'  => $request->numhistoria ,'fecha'  => $request->fecha ,'posicionavf'  => $request->posicionavf ,'centrar'  => $request->centrar ,'patron'  => $request->patron ,'cuerpo'  => $request->cuerpo ,'antero'  => $request->antero ,'transverso'  => $request->transverso ,'cuello'  => $request->cuello ,'anterocuello'  => $request->anterocuello ,'espesor'  => $request->espesor ,'linea'  => $request->linea ,'observacion'  => $request->observacion ,'nroconsulta'  => $request->nroconsulta ,'ovarioderlong'  => $request->ovarioderlong ,'ovarioderap'  => $request->ovarioderap ,'ovariodertras'  => $request->ovariodertras ,'ovarioizqlong'  => $request->ovarioizqlong ,'ovarioizqap'  => $request->ovarioizqap ,'ovarioizqtras'  => $request->ovarioizqtras ,'fondosacolibre'  => $request->fondosacolibre ,'fondosacootro'  => $request->fondosacootro ,'idxecografico'  => $request->idxecografico ,'sugerencias'  => $request->sugerencias ,'formautero'  => $request->formautero ,'observacionovario'  => $request->observacionovario ,'bordeutero'  => $request->bordeutero ,'fur'  => $request->fur ,'gesta'  => $request->gesta ,'trans_convex'  => $request->trans_convex ,'trans_transvaginal'  => $request->trans_transvaginal ,'vagina'  => $request->vagina ,'volumen_der'  => $request->volumen_der ,'volumen_izq'  => $request->volumen_izq ,'vagina_llena'  => $request->vagina_llena ,'posicionavf_d'  => $request->posicionavf_d ,'posicionrvf_d'  => $request->posicionrvf_d ,'linea_continuo'  => $request->linea_continuo ,'linea_homo'  => $request->linea_homo ,'linea_cavidad_u'  => $request->linea_cavidad_u ,'para'  => $request->para ,'puro_texto'  => $request->puro_texto  ] 
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
[ 'numhistoria'  => $request->numhistoria ,'fecha'  => $request->fecha ,'posicionavf'  => $request->posicionavf ,'centrar'  => $request->centrar ,'patron'  => $request->patron ,'cuerpo'  => $request->cuerpo ,'antero'  => $request->antero ,'transverso'  => $request->transverso ,'cuello'  => $request->cuello ,'anterocuello'  => $request->anterocuello ,'espesor'  => $request->espesor ,'linea'  => $request->linea ,'observacion'  => $request->observacion ,'nroconsulta'  => $request->nroconsulta ,'ovarioderlong'  => $request->ovarioderlong ,'ovarioderap'  => $request->ovarioderap ,'ovariodertras'  => $request->ovariodertras ,'ovarioizqlong'  => $request->ovarioizqlong ,'ovarioizqap'  => $request->ovarioizqap ,'ovarioizqtras'  => $request->ovarioizqtras ,'fondosacolibre'  => $request->fondosacolibre ,'fondosacootro'  => $request->fondosacootro ,'idxecografico'  => $request->idxecografico ,'sugerencias'  => $request->sugerencias ,'formautero'  => $request->formautero ,'observacionovario'  => $request->observacionovario ,'bordeutero'  => $request->bordeutero ,'fur'  => $request->fur ,'gesta'  => $request->gesta ,'trans_convex'  => $request->trans_convex ,'trans_transvaginal'  => $request->trans_transvaginal ,'vagina'  => $request->vagina ,'volumen_der'  => $request->volumen_der ,'volumen_izq'  => $request->volumen_izq ,'vagina_llena'  => $request->vagina_llena ,'posicionavf_d'  => $request->posicionavf_d ,'posicionrvf_d'  => $request->posicionrvf_d ,'linea_continuo'  => $request->linea_continuo ,'linea_homo'  => $request->linea_homo ,'linea_cavidad_u'  => $request->linea_cavidad_u ,'para'  => $request->para ,'puro_texto'  => $request->puro_texto  ] 
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

