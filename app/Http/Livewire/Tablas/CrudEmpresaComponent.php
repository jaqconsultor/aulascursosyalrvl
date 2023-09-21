<?php

namespace App\Http\Livewire\Tablas;

use App\Http\Livewire\Herencias\CrudDeTablasComponent;

use Livewire\Component;

class CrudEmpresaComponent extends CrudDeTablasComponent
{
    public function render()
    {
        return view('livewire.tablas.crud-empresa-component');
    }
}

