<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\CustomerRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
// use Illuminate\Support\Facades\Auth;
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
        $customer = new Customer;
        // $customer -> customerNumber = $id = Auth::id();
        $customer -> customerName = $request-> customerName;
        $customer ->contactFirstName = $request->contactFirstName;
        $customer ->contactLastName = $request->contactLastName ;
        $customer ->phone = $request->phone;
        $customer ->addressLine1 = $request->addressLine1;
        $customer ->addressLine2 = $request->addressLine2;
        $customer ->city = $request->city;
        $customer ->state = $request->state;
        $customer ->postalCode = $request->postalCode;
        $customer ->country = $request->country;
        // auth()->login($user);

        return redirect('/home')->with('success', "Account successfully registered.");
    }
}