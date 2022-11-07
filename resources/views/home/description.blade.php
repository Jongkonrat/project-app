@extends('layouts.app-master')

@section('content')

<div class=" p-5 rounded contain" >
    <h1>{{$products->productName }}</h1>

    <div style="padding: 10px " class="rounded-lg">
        <div style="display: flex;">
            <div style="flex: 50%;">
                <img src="https://freepngimg.com/download/car/1-2-car-png-picture.png" alt="" width="300" height="mx-auto">
            </div>
            <div style="flex: 50%;">
            <div style="padding: 10px">
            <p>{{ $products->productDescription }}</p>
            <p><b>Instock: </b> {{ $products->quantityInStock }}</p>
            <p><b>Productline: </b> {{$products->productLine}}</p>
            <p><b>Product vendor: </b> {{$products->productVendor}}</p>
            <p><b>Price: </b>{{ $products->buyPrice }}$</p>

            <a href="{{ url('/') }}" class="btnbtn-warning">
                <iclass="fa fa-angle-left"></i>Back
            </a>
            @auth
            @php 
        $id = auth()->user()->id;
        $cid = 0;
        $haveprofile = false;
@endphp
                            @foreach($customers as $customer)
                                @if($customer->customerNumber == $id)
                                    @php
                                        $haveprofile = true;
                                    @endphp
                                    
                                @endif
                            @endforeach
                            @if($haveprofile == true)
                                @if($products->quantityInStock <=0)
                                    <p class="text-center">Out of Stock</p>
                                @else
                                    <div class="btn-block text-center padding:5px ">
                                        <a href="{{ route('add.to.cart', $products->productCode) }}"><button><b>Add to cart</b></button></a>
                                    </div>
                                @endif
                            @endif
            
            @endauth
            </div>
        </div>
        
        </div>
    </div>
</div>


<style>
    h1 {
        color: #000;
        font-family: verdana;
    }

    p {
        color: #000;
        font-family: verdana;
    }

    button {
        background-color: #ffa90f;
        padding: 10px;
        border: none;
        border-radius: 10px;
    }

    img{
        display: block;
        margin: auto;
    }

    .contain{
        background-color: #E0E0E0;
        box-shadow: 0px 10px 30px 5px rgb(184, 184, 184);
        border-radius: 20px;
        padding-top: 25px;
        padding-bottom: 25px;
        margin-top: 7%;
    }
</style>

@endsection