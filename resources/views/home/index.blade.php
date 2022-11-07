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

        @php 
        $id = auth()->user()->id;
        $cid = 0;
        $haveprofile = false;
        @endphp
        <h1>Products</h1>
        @foreach($customers as $customer)
            @if($customer->customerNumber == $id)
            @php
                $cid = $id
            @endphp
            @endif
        @endforeach

            @if($cid == $id)
                <p class="lead">
                    <b>Choose the product that you want to buy.</b></p>
            @else
                <p class="lead addprofile">
                    <b >Please update your profile before buying!  </b> <a href="{{ route('customer.perform')}}"><b>Add profile</b><a></p>
                    
                
            @endif
        

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="row ">
                    @foreach($products as $product)
                    <div class="xs-18 col-sm-6 col-md-3">
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
                                <p style="padding-right:10px"><b>Stock :</b> {{ $product->quantityInStock }}</p>
                                <p><strong>Price : </strong>{{ $product->buyPrice }}$</p>
                            </div>
                            <div class="border-text-addtocart decorate-btn tracking-wider ">

                            @foreach($customers as $customer)
                                @if($customer->customerNumber == $id)
                                    @php
                                        $haveprofile = true;
                                    @endphp
                                    
                                @endif
                            @endforeach
                            @if($haveprofile == true)
                                @if($product->quantityInStock <=0)
                                    <p class="text-center">Out of Stock</p>
                                @else
                                    <div class="btn-block text-center padding:5px "><a href="{{ route('add.to.cart', $product->productCode) }}"><b>Add to cart</b></a></div>
                                @endif
                            @endif

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
    <p class="lead yellowtext"><b>You have to login before buy the products.</b></p>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <p>What we have in stocks.</p>

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
                            

                        </div>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
        </div>
    </div>
    @endguest
    </div>
    @endsection
</body>

</html>