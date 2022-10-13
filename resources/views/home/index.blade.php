@extends('layouts.app-master')

@section('content')
<div class="bg-light p-5 rounded">
    <!-- @auth
    <h1>Products</h1>
    <p class="lead">
        Choose the product that you want to buy.</p>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-xs-18 col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{{ $product->image }}"alt="">
                            <div class="caption">
                                <h4>{{ $product->productName }}</h4>
                                <p>{{ $product->productDescription }}</p>
                                <p>{{ $product->quantityInStock }}</p>
                                <p><strong>Price: </strong>{{ $product->buyPrice }}$</p>
                                <p class="btn-holder"><a href="{{ route('add.to.cart', $product->id) }}" class="btnbtn-warning btn-block text-center" role="button">Add to cart</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endauth -->
        
        <!-- @guest -->
        <h1>Homepage</h1>
        <p class="lead">You have to login before buy the products.</p>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <p>What we have in stocks.</p>
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-xs-18 col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{{ $product->image }}"alt="">
                            <div class="caption">
                            <h4>{{ $product->productName }}</h4>
                                <p>{{ $product->productDescription }}</p>
                                <p>{{ $product->quantityInStock }}</p>
                                <p><strong>Price: </strong>{{ $product->buyPrice }}$</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- @endguest -->
    </div>
@endsection