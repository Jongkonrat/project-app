<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>

<body>
    @extends('layouts.app-master')

    @section('content')
    <div class=" p-5 rounded">
        @auth
        <h1>Products</h1>
        <p class="lead">
            Choose the product that you want to buy.</p>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-xs-18 col-sm-6 col-md-3">
                        @if ($product->productLine = 'Classic Cars')
                        <div class="thumbnail ">
                            <div class="flex m-10 bg-white rounded-3xl shadow-2xl border-8 border-white">
                                <img src="https://freepngimg.com/download/car/1-2-car-png-picture.png" alt="" width="200" height="auto">
                            </div>
                            <!-- src="{{ $product->image }} -->
                            <div class="product-name">
                                <!-- <p>{{ $product->productCode }}</p> -->
                                <a href="{{ url('description/' .$product->productCode)}}">
                                    <div class="border-product-name">
                                        <h5 style="padding: 10px"><b>{{ $product->productName }}</b></h5>
                                </a>
                            </div>
                            <!-- <p>{{ $product->productDescription }}</p> -->
                            <div class="caption-stock-price">
                                <p style="padding-right:10px">stock : {{ $product->quantityInStock }}</p>
                                <p><strong>Price: </strong>{{ $product->buyPrice }}$</p>
                            </div>
                            <div class="border-text-addtocart decorate-btn tracking-wider ">
                                <!-- <p class="btn-block text-center padding:5px "><a href="{{ route('add.to.cart', $product->productCode) }}"><i>Add to cart</i></a></p> -->
                                <div class="btn-block text-center padding:5px "><a href="{{ route('add.to.cart', $product->productCode) }}"><b>Add to cart</b></a></div>
                            </div>

                        </div>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endauth

    @guest
    <h1>Homepage</h1>
    <p class="lead">You have to login before buy the products.</p>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <p>What we have in stocks.</p>

            <div class="row">
                @foreach($products as $product)
                @if ($product->productLine == 'Classic Cars')
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="{{ $product->image }}" alt="">
                        <div class="caption">
                            <h4>{{ $product->productName }}</h4>
                            <p>{{ $product->productDescription }}</p>
                            <p>{{ $product->quantityInStock }}</p>
                            <p>{{$product->productLine}}</p>
                            <p>{{$product->productVendor}}</p>
                            <p><strong>Price: </strong>{{ $product->buyPrice }}$</p>
                        </div>
                    </div>
                </div>
                @endif

                @endforeach
            </div>
        </div>
    </div>
    @endguest
    </div>
    @endsection
</body>

</html>