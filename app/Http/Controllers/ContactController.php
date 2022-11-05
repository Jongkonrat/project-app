<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display content.
     * 
     * @return \Illuminate\Http\Response
     */
    public function contact(){
        $offices = Contact::all();
        return view('home.contact', compact('offices'));
    }
}
