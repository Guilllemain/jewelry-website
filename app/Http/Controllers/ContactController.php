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
        dd($request);
        $recaptcha = $request->g-recaptcha-response;
        
        $to = 'mazlokarl@gmail.com';
        $subject = 'Tu as un nouveau message de ' . $request->name;
        $message = "<html><head></head><body>
        				<div>Salut Karl !</div>
        				<br>
        				<div>Tu trouveras ci-dessous le message reçu via ton site.</div>
        				<br>
        				<div><strong>Nom :</strong> {$request->name}</div>
        				<hr>
        				<div><strong>Email :</strong> {$request->email}</div>
        				<hr>
        				<div><strong>Message :</strong> {$request->message}</div>
        				<br>
        				<div>Bonne journée</div>
        			</body></html>";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: karlmazlo@ovh.com';

        mail($to, $subject, $message, $headers);
        // $admin->notify(new InboxMessage($request));

        return back()->with('message', 'Votre message a bien été envoyé, je vous répondrai dans les meilleurs délais.');
    }
}
