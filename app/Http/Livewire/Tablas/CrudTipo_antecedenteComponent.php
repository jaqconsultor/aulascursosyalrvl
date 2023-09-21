<?php

namespace App\Http\Livewire\Tablas;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use PDF;

class CrudTipo_antecedenteComponent extends Component
{
public $view = "livewire.tablas.crud-tipo_antecedente-component";
    public $registros = null;
public $tabla ="tipo_antecedente";
public $objeto ="objtipo_antecedente";

public $rutabase ="/rutatipo_antecedente";

public $nombreCrud = "dicc.Vertipo_antecedente"; 

 public $rutalista = "/usuarios/verlisttipo_antecedente"; 

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
$this->view = "livewire.tablas.crud-tipo_antecedente-component";
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


