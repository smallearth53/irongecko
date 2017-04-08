<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeAgain;

class ContactController extends Controller
{
    //
    public function displayForm() {
        return view('contact');
    }
    
    public function submitForm() {
        
        
        
        \Mail::to(request()->email)->send(new WelcomeAgain);
        
        
    }
}
