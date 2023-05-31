<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
// use Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index',[

        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'text' => 'required',
            'g-recaptcha-response' => 'required|recaptchav3:contact,0.5',
		];
        $message = [
            'name.required' => 'Vyplňte prosím jméno.',
            'email.required' => 'Vyplňte prosím e-mail.',
            'text.required' => 'Vyplňte prosím text.',
            'g-recaptcha-response.recaptchav3' => 'Capture error'
        ];

        $data = $request->validate($rules, $message);

        Contact::create($data);

        \Mail::send('emails.contact.incoming', [
                'email' => $request->email,
                'name' => $request->name,
                'text' => $request->text,
            ],
            function ($message) use ($request) {
            $message->from(env('MAIL_USERNAME', 'info@myks.cz'), env('APP_NAME'));
            $message->to('info@myks.cz', 'myks.cz');
            $message->bcc('mykheicheva@gmail.com', 'myks.cz');
            $message->bcc('vladyslavhrebennikov@gmail.com', 'myks.cz');
            $message->replyTo($request->email, $request->name);
            $message->subject('Odpoved´ z kontaktního formulaře');
        });

        return redirect()->route('home.index');
    }

    // public function payAndDelivery()
    // {
    //     return view('contacts.payAndDelivery');
    // }

    // public function retunrRules()
    // {
    //     return view('contacts.retunrRules');
    // }

}
