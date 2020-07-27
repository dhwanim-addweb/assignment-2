<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class MyDemoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

      return $this->view('emails.myDemoMail')
                  ->subject('Credentials')  
                 ->attach(storage_path('app\pdf1\details.pdf'), [
                      'as' => 'details.pdf',
                      'mime' => 'application/pdf',
                 ]);
    }
}
