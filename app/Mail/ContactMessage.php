<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $validated;

    public function __construct($validated)
    {
        $this->validated = $validated;
    }

    public function build()
    {
        return $this->view('emails.message')
                    ->with([
                    'name' => $this->validated['name'],
                    'email' => $this->validated['email'],
                    'subject' => $this->validated['subject'],
                    'message' => $this->validated['message'],
                    ]);
    }
}
