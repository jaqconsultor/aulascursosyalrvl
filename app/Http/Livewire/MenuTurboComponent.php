<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class MenuTurboComponent extends Component
{

    public $registros = null;

    public $menues = null;

    public $modulos = null;

    public $opciones = null;

    public function render()
    {

        $this->modulos = DB::table('sysopciones')
        ->selectRaw('modulo')
        ->where('contexto', '=', 'MenuTurbo')
        ->where('activo', '=', 1)
        ->groupBy('modulo')
        ->get();

        $this->menues = DB::table('sysopciones')
            ->selectRaw('menu, modulo')
            ->where('contexto', '=', 'MenuTurbo')
            ->where('activo', '=', 1)
            ->groupBy('menu')
            ->groupBy('modulo')
            ->get();
        
        $this->registros = DB::table('sysopciones')
            ->where('contexto', '=', 'MenuTurbo')
            ->where('activo', '=', 1)
            ->orderBy('ordernum', 'asc')
            ->get();

        return view('livewire.menu-turbo-component');
    }
}
