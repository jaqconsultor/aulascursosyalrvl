<?php

namespace App\Http\Livewire\Tablas;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use PDF;

class CrudPresupuesto_operatorio_copyComponent extends Component
{
public $view = "livewire.tablas.crud-presupuesto_operatorio_copy-component";
    public $registros = null;
public $tabla ="presupuesto_operatorio_copy";
public $objeto ="objpresupuesto_operatorio_copy";

public $rutabase ="/rutapresupuesto_operatorio_copy";

public $nombreCrud = "dicc.Verpresupuesto_operatorio_copy"; 

 public $rutalista = "/usuarios/verlistpresupuesto_operatorio_copy"; 

    public $btn_agregar = 1;
    public $btn_editar = 1;
    public $btn_eliminar = 1;

    public $btn_ver = 1;

    public $btn_lista = 1;
    public $btn_detalle = 1;

    public $btn_pdf = 0;

    public $btn_excel = 1;

    public $btn_importar = 1;

    function __construct() {
$this->view = "livewire.tablas.crud-presupuesto_operatorio_copy-component";
        $this->registros = DB::table($this->tabla)->get();
        $this->registros = $this->registros->toArray();
        $this->btn_detalle = 0;
    }

    public function verformulario($ruta)
    {
        return redirect($this->rutabase . "/" . $ruta);
    }

    public function verformulario1($ruta,$id)
    {
        return redirect($this->rutabase . "/" . $ruta . "/" . $id);
    }

    public function render()
    {
        return view($this->view);
    }
}


