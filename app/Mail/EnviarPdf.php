<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnviarPdf extends Mailable
{
    use Queueable, SerializesModels;

    public $mailData;

    public $subject = "Información de contacto";

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct($mailData)
    {
         $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.email.enviarPdf')->attachFromStorage('/estudio/pdf/'.$this->mailData['filename']);
        /*return $this->view('view.email.enviarPdf')->attachFromStorage('estudio/pdf', $this->mailData['filename'], [
                   'mime' => 'application/pdf'
               ]);
        */
        return $this->view('Email.enviarPdf')->attach(storage_path('app/public/estudio/pdf/').$this->mailData['filename'], [ //absolute path
       'as' => $this->mailData['filename'],
       'mime' => 'application/pdf'
 ]);
    }
}
