<?php

namespace App\Http\Livewire\Tablas;

use App\Http\Livewire\Herencias\CrudDeTablasComponent;
use Illuminate\Support\Facades\DB;

use Livewire\Component;

class CrudPacientesComponent extends Component
{
    public $registros = null;

    public $seccion = 1;    // 1 - Scroll,  2 - editar,  3 - Mostrar, 4 - Eliminar

    public $view = "tablas.crud-pacientes-component";

    public function eliminar($id)
    {
        $this->reset();
  
        $this->seccion = 1;
        $deleted = DB::table('pacientes')->where('id', '=', $id)->delete();
    }

    public function edit($id)
    {
        $this->reset();
  
        $this->seccion = 3;
        $this->registros = DB::table('pacientes')->where('id', '=', $id)->get();
    }

    public function buscar()
    {
        $this->reset();
  
        $this->seccion = 1;
    }

    public function nuevo()
    {

        $this->reset();
  
        $this->seccion = 5;
    }
	public function confirmTemasRemoval($TemasId)
	{
		$this->TemasIdBeingRemoved = $TemasId;

		$this->dispatchBrowserEvent('show-delete-modal');
	}

    public function changeView($view){
        $this->view = $view;
    }

    public function render()
    {
        //if( $this->seccion == 1 ){
            $this->registros = DB::table('pacientes')->get();
        //}
        return view('livewire.tablas.crud-pacientes-component');
        //return view('livewire.tablas.crud-pacientes-component');
        //return view('livewire.tablas.ver-template-component');
    }
}

/*
<div>
<button wire:click="changeView('views.home')">Home</button>
<button wire:click="changeView('views.register')">Register</button>
<button wire:click="changeView('views.sale')">Sale</button>
{{$view}}
@livewire($view)
</div>

class NewTemplate extends Component
{

public $view = "views.home";

public function render()
{
    return view('livewire.new-template');
}

public function changeView($view){
    $this->view = $view;
}
}
*/