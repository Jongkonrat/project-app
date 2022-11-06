@extends('layouts.app-master')

@section('content')

    @php
    $id = auth()->user()->id;
    @endphp
    <div style="padding-top: 50px">
        <div style="padding-left: 300px">
            <img src="https://www.techhub.in.th/wp-content/uploads/2021/05/577280151-1.jpg" alt="">
            <div style="padding-left: 150px">
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
            </div>
        </div>
    </div>
    <style>
        h1{
        color: #000;
        font-family: verdana;
    }

    p{
        color: #000;
        font-family: verdana;
    }
    </style>
@endsection