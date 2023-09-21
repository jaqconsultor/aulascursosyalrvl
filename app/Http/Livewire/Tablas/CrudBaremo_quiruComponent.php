<?php

namespace App\Http\Livewire\Tablas;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use PDF;

class CrudBaremo_quiruComponent extends Component
{
public $view = "livewire.tablas.crud-baremo_quiru-component";
    public $registros = null;
public $tabla ="baremo_quiru";
public $objeto ="objbaremo_quiru";

public $rutabase ="/rutabaremo_quiru";

public $nombreCrud = "dicc.Verbaremo_quiru"; 

 public $rutalista = "/usuarios/verlistbaremo_quiru"; 

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
$this->view = "livewire.tablas.crud-baremo_quiru-component";
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


