<?php

namespace Rutul\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $name,$description;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::emails.contact')->with(['name' => $this->name , 'message' => $this->description]);
    }
}
