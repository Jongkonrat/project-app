@extends('layouts.app-master')

@section('content')

    @php
    $id = auth()->user()->id;
    @endphp
    <div class="contain">
        <div>
            <div style="display: flex;">
                @foreach($customers as $customer)
                    @if($customer -> customerNumber == $id)
                        <!-- pic -->
                        <div style="flex: 50%;">
                            <div style="margin-top: 10%; margin-bottom: 4%;">
                                <img src="https://www.techhub.in.th/wp-content/uploads/2021/05/577280151-1.jpg" alt="">
                            </div>
                            <h1 style="text-align: center;">{{ $customer->customerName }}</h1>
                            <div class="idBox">
                                <p style="text-align: center; padding: 10px;">ID: {{ $customer->customerNumber }}</p>
                            </div>
                        </div>
                        <!-- info -->
                        <div style="flex: 50%;">
                            <h1>My Profile</h1>
                            <!-- fisrtname/lastname -->
                            <div style="display: flex;">
                                <div style="flex: 50%;">
                                    <p style="color: #64748b;">First Name:</p>
                                    <div class="box">
                                        <p class="info">{{$customer->contactFirstName}}</p>
                                    </div>
                                </div>
                                <div style="flex: 50%;">
                                    <p style="color: #64748b;">Last Name:</p>
                                    <div class="box">
                                        <p class="info">{{$customer->contactLastName}}</p>
                                    </div>
                                </div> 
                            </div>
                            <!-- Phone -->
                            <div>
                                <p style="color: #64748b;">Phone:</p>
                                <div class="box" style="width: 90%;">
                                    <p class="info">{{$customer->phone}}</p>
                                </div>
                            </div>
                            <!-- City/State -->
                            <div style="display: flex;">
                                <div style="flex: 50%;">
                                    <p style="color: #64748b;">City:</p>
                                    <div  class="box">   
                                        <p class="info">{{$customer->city}}</p>
                                    </div>
                                </div>
                                <div style="flex: 50%;">
                                    <p style="color: #64748b;">State:</p>
                                    <div class="box">
                                        <p class="info">{{$customer->state}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- PostalCode/Country -->
                            <div style="display: flex;">
                                <div style="flex: 50%;">
                                    <p style="color: #64748b;">Postal Code:</p>
                                    <div class="box">
                                        <p class="info">{{$customer->postalCode}}</p>
                                    </div>
                                </div>
                                <div style="flex: 50%;">
                                    <p style="color: #64748b;">Country:</p>
                                    <div class="box">
                                        <p class="info">{{$customer->country}}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- AddressLine1 -->
                            <div>
                                <p style="color: #64748b;">Address:</p>
                                <div class="box" style="width: 90%;">
                                    <p class="info" >{{$customer->addressLine1}}</p>
                                </div>
                            </div>
                            
                        </div>  
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

    img{
        /* border-radius: 50%; */
        background-size:cover;
        background-position:center;
        width:300px;
        height:300px;
        border-radius: 50%;
        margin: auto;
        display: block;
    }
    .box{
        background-color: #d4d4d8;
        border-radius: 10px;
        width: 80%;
        margin-top: -14px;
    }
    .info{
        margin-left: 7%;
        padding-top: 10px;
        padding-bottom: 10px;
        color: #334155;
    }
    .center{
        margin: auto;
        display: block;
    }
    .contain{
        background-color: #E0E0E0;
        box-shadow: 0px 10px 30px 5px rgb(184, 184, 184);
        border-radius: 20px;
        padding-top: 25px;
        padding-bottom: 25px;
        margin-top: 7%;
        
    }
    .idBox{
        background-color: #ffa90f; 
        width: fit-content; 
        margin:auto; 
        border-radius: 10px;
    }
    </style>
@endsection