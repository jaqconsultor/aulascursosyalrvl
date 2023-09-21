<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
class VerPacientesComponent extends Component
{
   
      
    public $registros = null;
    public $cita = null;

    public function buscar()
    {
        $this->cita = 1;
        $this->registros = DB::table('users')->get();
    }

    public function atender()
    {
        $this->cita = 2;
        
    }

    public function render()
    {
        return view('livewire.ver-pacientes-component');
    }
}
