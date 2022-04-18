<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmailWelcome extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */


    # initializing a private variable $name
    private $name;

    # pass a parameter in the constructor , we have passed the private variable $name here,
    public function __construct($name)
    {
        # this name belongs to the variable name;
        $this->name= $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        # here we have returned an view with the email subject and with the name

        // return $this->view('view.name');
        return $this->subject('welcome to events')->view('mail.welcome')->with([
             'name'=> $this->name,
        ]);
    }
}
