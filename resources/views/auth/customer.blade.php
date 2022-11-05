@extends('layouts.auth-master')
@section('content')

<form method="post" action="{{ route('customer.perform') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <!-- customerName -->
        <div class="form-group form-floating mb-3">
        <input type="customerName" class="form-control" name="customerName" value="{{ old('customerName') }}" placeholder="customerName" required="required" autofocus>
        <label for="floatingcustomerName">customerName</label>
        @if ($errors->has('customerName'))
        <span class="text-danger text-left">{{ $errors->first('customerName') }}</span>
        @endif
    </div>
    <!-- FirstName -->
    <div class="form-group form-floating mb-3">
        <input type="contactFirstName" class="form-control" name="contactFirstName" value="{{ old('contactFirstName') }}" placeholder="contactFirstName" required="required" autofocus>
        <label for="floatingcontactFirstName">contactFirstName</label>
        @if ($errors->has('contactFirstName'))
        <span class="text-danger text-left">{{ $errors->first('contactFirstName') }}</span>
        @endif
    </div>
    <!-- LastName -->
    <div class="form-group form-floating mb-3">
        <input type="contactLastName" class="form-control" name="contactLastName" value="{{ old('contactLastName') }}" placeholder="contactLastName" required="required" autofocus>
        <label for="floatingcontactLastName">contactLastName</label>
        @if ($errors->has('contactLastName'))
        <span class="text-danger text-left">{{ $errors->first('contactLastName') }}</span>
        @endif
    </div>
    <!-- phone -->
    <div class="form-group form-floating mb-3">
        <input type="phone" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="phone" required="required" autofocus>
        <label for="floatingphone">Phone</label>
        @if ($errors->has('phone'))
        <span class="text-danger text-left">{{ $errors->first('phone') }}</span>
        @endif
    </div>
    <!-- addressLine1 -->
    <div class="form-group form-floating mb-3">
        <input type="addressLine1" class="form-control" name="addressLine1" value="{{ old('addressLine1') }}" placeholder="addressLine1" required="required" autofocus>
        <label for="floatingaddressLine1">addressLine1</label>
        @if ($errors->has('addressLine1'))
        <span class="text-danger text-left">{{ $errors->first('addressLine1') }}</span>
        @endif
    </div>
    <!-- addressLine2 -->
    <div class="form-group form-floating mb-3">
        <input type="addressLine2" class="form-control" name="addressLine2" value="{{ old('addressLine2') }}" placeholder="addressLine2" required="required" autofocus>
        <label for="floatingaddressLine2">addressLine2</label>
        @if ($errors->has('addressLine2'))
        <span class="text-danger text-left">{{ $errors->first('addressLine2') }}</span>
        @endif
    </div>
    <!-- city -->
    <div class="form-group form-floating mb-3">
        <input type="city" class="form-control" name="city" value="{{ old('city') }}" placeholder="city" required="required" autofocus>
        <label for="floatingphone">city</label>
        @if ($errors->has('city'))
        <span class="text-danger text-left">{{ $errors->first('city') }}</span>
        @endif
    </div>
    <!-- state -->
    <div class="form-group form-floating mb-3">
        <input type="state" class="form-control" name="state" value="{{ old('state') }}" placeholder="state" required="required" autofocus>
        <label for="floatingstate">state</label>
        @if ($errors->has('state'))
        <span class="text-danger text-left">{{ $errors->first('state') }}</span>
        @endif
    </div>
    <!-- postalCode -->
    <div class="form-group form-floating mb-3">
        <input type="postalCode" class="form-control" name="postalCode" value="{{ old('postalCode') }}" placeholder="postalCode" required="required" autofocus>
        <label for="floatingpostalCode">postalCode</label>
        @if ($errors->has('postalCode'))
        <span class="text-danger text-left">{{ $errors->first('postalCode') }}</span>
        @endif
    </div>
    <!-- country -->
    <div class="form-group form-floating mb-3">
        <input type="country" class="form-control" name="country" value="{{ old('country') }}" placeholder="country" required="required" autofocus>
        <label for="floatingpostalCode">country</label>
        @if ($errors->has('country'))
        <span class="text-danger text-left">{{ $errors->first('country') }}</span>
        @endif
    </div>
     <!--  -->
     <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    @include('auth.partials.copy')
</form>

@endsection