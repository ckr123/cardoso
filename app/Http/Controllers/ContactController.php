<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Mail\ContactForm;

class ContactController extends Controller
{
    public function index()
    {
        return view('public.contact');
    }

    public function send(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'text' => 'required|string|max:250'
        ]);

        $data = $request->only('email', 'phone', 'text');

        Mail::to(config('cardoso.contact'))
            ->send(new ContactForm($data));
        return redirect()->route('thanks');
    }

    public function thanks()
    {
        return view('mail.thanks');
    }
}
