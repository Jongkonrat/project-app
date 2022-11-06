@extends('layouts.app-master')

@section('content')
<div class=" p-5 rounded">
    <h1>{{$products->productName }}</h1>

    <div style="padding: 10px " class="rounded-lg">
        <img src="https://freepngimg.com/download/car/1-2-car-png-picture.png" alt="" width="300" height="mx-auto">
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
            <div class="border-text-addtocart decorate-btn tracking-wider text-center padding:5px "><a href="{{ route('add.to.cart', $products->productCode) }}"><b>Add to cart</b></a></div>
            @endauth
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
</style>

@endsection