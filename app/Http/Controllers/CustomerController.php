<?php

namespace App\Http\Controllers;

use App\Models\Customer;
<<<<<<< Updated upstream
=======
use App\Http\Requests\CustomerRequest;
>>>>>>> Stashed changes
use Illuminate\Http\Request;

class CustomerController extends Controller
{
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
        return redirect('/')->with('success', "Account successfully registered.");
=======
        return redirect('/home')->with('success', "Account successfully registered.");
>>>>>>> Stashed changes
    }
}
