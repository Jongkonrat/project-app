@extends('layouts.app-master')

@section('content')

    @php
    $id = auth()->user()->id;
    @endphp

    @foreach($customers as $customer)
        @if($customer -> customerNumber == $id)
            <h1>{{ $customer->customerName }}</h1>
            <p>ID: {{ $customer->customerNumber }}</p>
            <p>First Name: {{$customer->contactFirstName}}</p>
            <p>Last Name: {{$customer->contactLastName}}</p>
            <p>Phone: {{$customer->phone}}</p>
            <p>Address: {{$customer->addressLine1}}</p>
            <p>City: {{$customer->city}}</p>
            <p>State: {{$customer->state}}</p>
            <p>Postal Code: {{$customer->postalCode}}</p>
            <p>Country: {{$customer->country}}</p>
        @endif
    @endforeach
@endsection