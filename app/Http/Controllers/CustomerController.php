<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    //
    /**
    * Display register page.
    * 
    * @return \Illuminate\Http\Response
    */
    public function show()
    {
        return view('auth.customer');
    }
    /**
    * Handle account registration request
    * 
    * @param CustomerRequest $request
    * 
    * @return \Illuminate\Http\Response
    */
    public function customer(CustomerRequest $request) 
    {
        $customer = Customer::create($request->validated());
        // auth()->login($user);
        return redirect('/')->with('success', "Account successfully registered.");
    }
}
