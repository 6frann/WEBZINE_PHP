<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    public function index() {
        return view('pages.contact');
    }

    public function send(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        Mail::to('boulunpeu4000@gmail.com')->send(new ContactMessage($validate));
    }
}
