@extends('layouts.app-master')

@section('content')
<p> </p>
<h1>{{$products->productName }}</h1>

<div style="padding: 50px"  class="rounded-lg">
    <img src="https://freepngimg.com/download/car/1-2-car-png-picture.png" alt="" width="300" height="mx-auto">
        <div style="padding: 45px">
            <p>{{ $products->productDescription }}</p>
            <p>{{ $products->quantityInStock }}</p>
            <p>{{$products->productLine}}</p>
            <p>{{$products->productVendor}}</p>
            <p><strong>Price: </strong>{{ $products->buyPrice }}$</p>

            <a href="{{ url('/') }}"class="btnbtn-warning"><iclass="fa fa-angle-left"></i>Continue Shopping</a>
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