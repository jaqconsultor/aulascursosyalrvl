<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class BuscarMedicoComponent extends Component
{
    
    public $registros = null;
    public $cita = null;

    public function buscar()
    {
        $this->cita = 1;
        $this->registros = DB::table('users')->get();
    }

    public function nuevabusqueda()
    {
        $this->registros = null;
        $this->cita = 1;
    }

    public function hacercita()
    {
        $this->registros = null;
        $this->cita = 3;
    }

    public function nuevacita()
    {
        $this->registros = null;
        $this->cita = 2;
    }

    public function borrar()
    {
        $this->cita = null;
        $this->registros = null;
    }
    public function render()
    {
        return view('livewire.buscar-medico-component');
    }

  
}
