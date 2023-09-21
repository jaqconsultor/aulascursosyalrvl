<?php

namespace App\Http\Controllers;

use Livewire\Component;

use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarPdf;
use Carbon\Carbon;

class PruebaEmail extends Controller
{

	public $mailData = [];

	public function enviarEmailPdf()
    {
    	$prueba = true;
        
        if($prueba)
        {
            //mandar mensaje de pdf

            $this->mailData["filename"] = 'archivo.pdf';

            $this->mailData["name"] = 'jose rosales';

            $this->mailData['mailto'] = 'typej2003@gmail.com';
            $this->mailData['correlacion'] = 'X000001';
            $this->mailData['created_at'] = date("d-m-Y h:i:s");;
            $this->mailData['subject'] = "Enviar Estudio";

            $enviarpdf = new EnviarPdf($this->mailData);



            $this->send($this->mailData["mailto"], $enviarpdf, "Envio de Pdf al Correo typej2003@gmail.com");

            //fin de mandar mensaje de orden
        }
        else
        {
            dd('no posee email');
        }     
    }

    public function send($mailto, $enviarpdf, $msj)
    {

        Mail::to($mailto)->send($enviarpdf);
        
   
        $this->dispatchBrowserEvent('updated', ['message' => $msj]);
    }

    public function render()
    {
        return view('livewire.prueba-email');
    }
}
