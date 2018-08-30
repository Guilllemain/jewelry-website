<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Requests\ContactFormRequest;
use App\Mail\Contact;
use App\Notifications\InboxMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function store(ContactFormRequest $request, Admin $admin)
    {
        $admin->notify(new InboxMessage($request));

        return back()->with('message', 'Votre message a bien été envoyé, je vous répondrai dans les meilleurs délais.');
    }
}
