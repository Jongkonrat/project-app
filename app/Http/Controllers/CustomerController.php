<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display cistomer's profile
     * 
     * @return \Illuminate\Http\Response
     */
    public function CustomerProfile(){
        $customers = Customer::all();
        $users = User::all();
        return view('home.profile', compact('customers', 'users'));
    }
}
