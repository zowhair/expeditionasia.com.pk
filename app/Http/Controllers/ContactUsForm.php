<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactUsForm extends Controller
{
    // create contact form
    public function createForm(Request $request) {
        return view('/contact');
    }

    // store contact form data
    public function ContactUsForm(Request $request) {
        // Form Validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        //Store data in database
        Contact::create($request->all());

        // Send Mail to admin
        \Mail::send('mail', array(
            'name'=> $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message'),
        ), function($message) use ($request) {
            $message->from($request->email);
            $message->to('zowhair@gmail.com', 'Admin');
        });

        return back()->with('success', 'we have received message and will contact you soon');
    }
}
