<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class MenuHorizonalComponent extends Component
{
    public $registros = null;
    public function render()
    {

        $this->registros = DB::table('sysopciones')->get();
         
        return view('livewire.menu-horizonal-component');
    }
}
