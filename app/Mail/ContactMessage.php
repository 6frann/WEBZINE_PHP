<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->view('pages.contact')
                    ->with([
                    'namem' => $this->data['name'],
                    'email' => $this->data['email'],
                    'subject' => $this->data['subject'],
                    'message' => $this->data['message'],
                    ]);
    }
}
