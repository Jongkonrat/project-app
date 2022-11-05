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
        $customer -> customerNumber = auth()->user()->id;
        $customer -> customerName = $request-> customerName;
        $customer ->contactLastName = $request->contactLastName ;
        $customer ->contactFirstName = $request->contactFirstName;
        $customer ->phone = $request->phone;
        $customer ->addressLine1 = $request->addressLine1;
        $customer ->addressLine2 = $request->addressLine2;
        $customer ->city = $request->city;
        $customer ->state = $request->state;
        $customer ->postalCode = $request->postalCode;
        $customer ->country = $request->country;
        $customer ->salesRepEmployeeNumber  =1002;
        $customer ->creditLimit = null;
        $customer->save();
        // auth()->login($user);

        return redirect('/')->with('success', "Account successfully registered.");
    }
}

