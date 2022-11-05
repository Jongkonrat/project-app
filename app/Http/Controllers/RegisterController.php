<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    //
    /**
    * Display register page.
    * 
    * @return \Illuminate\Http\Response
    */
    public function show()
    {
        return view('auth.register');
    }
    /**
    * Handle account registration request
    * 
    * @param RegisterRequest $request
    * 
    * @return \Illuminate\Http\Response
    */
    public function register(RegisterRequest $requestr, CustomerRequest $requestc) 
    {
        $user = User::create($requestr->validated());
        auth()->login($user);
        return redirect('/')->with('success', "Account successfully registered.");
    }
}
