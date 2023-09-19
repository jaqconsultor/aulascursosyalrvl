<?php

namespace App\Http\Livewire\Reportes;

use Livewire\Component;

use PDF;

class ModuloReporteComponent extends Component
{

    public $reporte ="";

    public function render()
    {
        return view('livewire.reportes.modulo-reporte-component');
    }
}
