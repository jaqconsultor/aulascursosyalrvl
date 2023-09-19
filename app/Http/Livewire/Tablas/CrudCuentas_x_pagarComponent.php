<?php

namespace App\Http\Livewire\Tablas;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use PDF;

class CrudCuentas_x_pagarComponent extends Component
{
public $view = "livewire.tablas.crud-cuentas_x_pagar-component";
    public $registros = null;
public $tabla ="cuentas_x_pagar";
public $objeto ="objcuentas_x_pagar";

public $rutabase ="/rutacuentas_x_pagar";

public $nombreCrud = "dicc.Vercuentas_x_pagar"; 

 public $rutalista = "/usuarios/verlistcuentas_x_pagar"; 

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
$this->view = "livewire.tablas.crud-cuentas_x_pagar-component";
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


