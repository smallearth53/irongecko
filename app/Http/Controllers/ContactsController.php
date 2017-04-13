<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail\Welcome;

class ContactsController extends Controller
{
    //
    public function displayForm() {
        return view('contact');
    }
    
    public function returnContacts() {
        $contacts = Contact::all();
        
        return $contacts;
    }
    
    public function submitForm() {
        
        $contact = new Contact;
        
        $contact->email = request()->email;
        $contact->firstName = request()->firstName;
        $contact->lastName = request()->lastName;
        $contact->message = request()->message;
        
        $contact->save();
        
//        \ Mail::to(request()->email)->send(new Welcome(request()->all()));
        
        return redirect('contact')->with('status', 'Contact Form submitted');
        
        
    }
}
