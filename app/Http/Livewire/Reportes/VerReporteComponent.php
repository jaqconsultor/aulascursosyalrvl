<?php

namespace App\Http\Livewire\Reportes;



use Livewire\Component;

class VerReporteComponent extends Component
{
    public $reporte = "archivo.pdf";

    public function render()
    {
        return view('livewire.reportes.ver-reporte-component');
    }
}
