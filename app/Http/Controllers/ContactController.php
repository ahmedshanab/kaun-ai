<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function send(Request $request)
{
    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required',
    ]);

   // return redirect(url('/#contact'))->with('success', 'Your message has been sent successfully.');

Mail::to('info@kaunai.org')->send(new ContactMessageMail($validated));

        // إرجاع رد إلى المستخدم
    return redirect(url('/#contact'))->with('success', 'Your message has been sent successfully.');
}
}
