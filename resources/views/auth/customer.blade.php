@extends('layouts.auth-master')
@section('content')

<section >
<div class="container">
<form method="post" action="{{ route('customer.perform') }}">
    <div class="title">
        <i class="fas fa-pencil-alt"></i> 
        <h2>Register here</h2>
    </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <!-- customerName -->
        <div class="form-group form-floating mb-3">
        <label for="floatingcustomerName">Name (Person/Company) :</label>
        <input type="customerName" class="form-control" name="customerName" value="{{ old('customerName') }}" placeholder="customerName" required="required" autofocus>
        
        @if ($errors->has('customerName'))
        <span class="text-danger text-left">{{ $errors->first('customerName') }}</span>
        @endif
    </div>
    <!-- FirstName -->
    <div class="form-group form-floating mb-3">
        <label for="floatingcontactFirstName">First Name :</label>
        <input type="contactFirstName" class="form-control" name="contactFirstName" value="{{ old('contactFirstName') }}" placeholder="contactFirstName" required="required" autofocus>
        
        @if ($errors->has('contactFirstName'))
        <span class="text-danger text-left">{{ $errors->first('contactFirstName') }}</span>
        @endif
    </div>
    <!-- LastName -->
    <div class="form-group form-floating mb-3">
        <label for="floatingcontactLastName">Last Name :</label>
        <input type="contactLastName" class="form-control" name="contactLastName" value="{{ old('contactLastName') }}" placeholder="contactLastName" required="required" autofocus>
        
        @if ($errors->has('contactLastName'))
        <span class="text-danger text-left">{{ $errors->first('contactLastName') }}</span>
        @endif
    </div>
    <!-- phone -->
    <div class="form-group form-floating mb-3">
        <label for="floatingphone">Phone :</label>
        <input type="phone" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="phone" required="required" autofocus>
        
        @if ($errors->has('phone'))
        <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
        @endif
    </div>
    <!-- addressLine1 -->
    <div class="form-group form-floating mb-3">
        <label for="floatingaddressLine1">Address line 1 :</label>
        <input type="addressLine1" class="form-control" name="addressLine1" value="{{ old('addressLine1') }}" placeholder="addressLine1" required="required" autofocus>
        
        @if ($errors->has('addressLine1'))
        <span class="text-danger text-left">{{ $errors->first('addressLine1') }}</span>
        @endif
    </div>
    <!-- addressLine2 -->
    <div class="form-group form-floating mb-3">
        <label for="floatingaddressLine2">Address line 2 :</label>
        <input type="addressLine2" class="form-control" name="addressLine2" value="{{ old('addressLine2') }}" placeholder="addressLine2" required="required" autofocus>
        
        @if ($errors->has('addressLine2'))
        <span class="text-danger text-left">{{ $errors->first('addressLine2') }}</span>
        @endif
    </div>
    <!-- city -->
    <div class="form-group form-floating mb-3">
        <label for="floatingphone">City :</label>
        <input type="city" class="form-control" name="city" value="{{ old('city') }}" placeholder="city" required="required" autofocus>
        
        @if ($errors->has('city'))
        <span class="text-danger text-left">{{ $errors->first('city') }}</span>
        @endif
    </div>
    <!-- state -->
    <div class="form-group form-floating mb-3">
        <label for="floatingstate">State :</label>
        <input type="state" class="form-control" name="state" value="{{ old('state') }}" placeholder="state" required="required" autofocus>
        
        @if ($errors->has('state'))
        <span class="text-danger text-left">{{ $errors->first('state') }}</span>
        @endif
    </div>
    <!-- postalCode -->
    <div class="form-group form-floating mb-3">
        <label for="floatingpostalCode">Postal Code :</label>
        <input type="postalCode" class="form-control" name="postalCode" value="{{ old('postalCode') }}" placeholder="postalCode" required="required" autofocus>
        
        @if ($errors->has('postalCode'))
        <span class="text-danger text-left">{{ $errors->first('postalCode') }}</span>
        @endif
    </div>
    <!-- country -->
    <div class="form-group form-floating mb-3">
        <label for="floatingpostalCode">Country :</label>
        <input type="country" class="form-control" name="country" value="{{ old('country') }}" placeholder="country" required="required" autofocus>
        
        @if ($errors->has('country'))
        <span class="text-danger text-left">{{ $errors->first('country') }}</span>
        @endif
    </div>
     <!--  -->
    <div class="form-group">
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </div>
        <!-- @include('auth.partials.copy') -->
</form>
</div>
</section>
@endsection


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
      background: url("https://ae01.alicdn.com/kf/HTB1InpLIpXXXXX.XpXXq6xXFXXXm/A-hot-super-sports-car-wallpaper-HD-Home-Furnishing-vintage-car-car-poster-art-silk-printing.jpg_Q90.jpg_.webp") no-repeat center;
      background-size: cover;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .center-part, form {
      padding: 25px;
      }
      .center-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }

      .form-group {
      margin-bottom: 1rem; }

      label {
      display: inline-block;
      margin-bottom: 0.5rem; }
    </style>
