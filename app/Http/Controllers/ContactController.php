<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Welcome;

class ContactController extends Controller
{
    //
    public function displayForm() {
        return view('contact');
    }
    
    public function submitForm() {
        
        
        
        \Mail::to(request()->email)->send(new Welcome(request()->all()));
        
        
    }
}
