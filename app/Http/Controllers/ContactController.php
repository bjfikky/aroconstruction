<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ]);

        Mail::send('email.contact', [
            'msg' => $request->message
        ], function($mail) use ($request) {
            $mail->from($request->email, $request->name);
            $mail->to('info@aroconstructionservices.com')->subject('Contact Message from '.$request->name);
        });

        return redirect()->back()->with('message', 'Thank you for contacting us. We\'ll get back to you soon.' );
    }
}
