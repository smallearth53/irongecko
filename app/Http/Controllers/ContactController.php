<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function displayForm() {
        return view('contact');
    }
    
    public function submitForm() {
        return 'submitted';
    }
}
