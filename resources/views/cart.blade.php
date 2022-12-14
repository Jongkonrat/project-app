@extends('layouts.app-master')

@section('content')

<!-- background-color: white; border-radius: 10px; padding: 18px; width: fit-content; 
box-shadow: 0px 10px 30px 5px rgb(0,0,0,.15); width:70%; margin: auto; margin-top: 7%; -->
<table class="border-collapse align-items-center" style="justify-item: center;box-shadow: 0px 10px 30px 5px rgb(184, 184, 184);
width:90%; margin: auto; margin-top: 7%; background-color: #E0E0E0; border-radius: 10px;">
    @auth
    <thead class="border-collapse" style="text-align: center; border-bottom: dashed grey; margin: 40px; ">
        <tr>
            <th style="padding-bottom: 1.2%; padding-top: 1.2%;"></th>
            <th style="padding-bottom: 1.2%; width: 30%; padding-top: 1.2%;">Name</th>
            <th style="padding-bottom: 1.2%; padding-right: 20px; padding-left: 20px; padding-top: 1.2%;">Price</th>
            <th style="padding-bottom: 1.2%; padding-top: 1.2%;">Quantity</th>
            <th style="padding-bottom: 1.2%; padding-right: 20px; padding-left: 20px; padding-top: 1.2%;"class="text-center">Subtotal</th>
            <th style="padding-bottom: 1.2%; padding-top: 1.2%;"></th>
        </tr>
        
    </thead>
    
    <tbody style="padding: 10px;">
    @php 
    $total = 0 ;
    $id = auth()->user()->id;
    @endphp

            <tr>
                <td class="inner-table" style="text-align: center; padding-right: 20px; 
                    padding-left: 20px; padding-top: 10px; padding-bottom: 10px;">
                    </td>
                    <td class="inner-table" style="padding-right: 20px; padding-left: 20px;
                    padding-top: 10px; padding-bottom: 10px;">
                    <td class="inner-table" style="text-align: center; padding-right: 20px; padding-left: 20px;
                    padding-top: 10px; padding-bottom: 10px;"></td>
                    <td class="inner-table" style="text-align: center; padding-right: 20px; padding-left: 20px;
                    padding-top: 10px; padding-bottom: 10px;">
                    
                    <td data-th="Subtotal" class="text-center" style="padding-right: 20px; padding-left: 20px;
                    padding-top: 10px; padding-bottom: 10px;"></td>
                    <td style ="">
                        <form action="{{ url('clear/'.$id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button style="padding: 0; border: none; background: none;color:red">Clear all</button>
                        </form>
                    </td>
                    
                </tr>


        @foreach( $carts as $cart )
            
            @if($cart -> customerNumber == $id)
            @php
                foreach($products as $product){
                    if($cart->productCode == $product->productCode){
                    $productName = $product->productName;
                    $buyPrice = $product->buyPrice;
                    }
                }
                
                    

            @endphp


                <tr>
                    <td class="inner-table" style="text-align: center; padding-right: 20px; 
                    padding-left: 20px; padding-top: 10px; padding-bottom: 10px;">
                    <img src="https://freepngimg.com/download/car/1-2-car-png-picture.png" alt="" width="200" height="auto"></td>
                    <td class="inner-table" style="padding-right: 20px; padding-left: 20px;
                    padding-top: 10px; padding-bottom: 10px;"><a href="{{ url('description/' .$cart->productCode)}}" style="color:black">{{ $productName }}</a></td>
                    <td class="inner-table" style="text-align: center; padding-right: 20px; padding-left: 20px;
                    padding-top: 10px; padding-bottom: 10px;">{{ $buyPrice }}</td>
                    <td class="inner-table" style="text-align: center; padding-right: 20px; padding-left: 20px;
                    padding-top: 10px; padding-bottom: 10px;">
                    @if($product->quantityInStock > $cart->quantity )
                        <a href="{{ route('add.from.cart', $cart->id) }}">+</a>
                    @endif
                    {{ $cart->quantity }}
                    <a href="{{ route('delete.from.cart', $cart->id) }}">-</a>
                    <td data-th="Subtotal" class="text-center" style="padding-right: 20px; padding-left: 20px;
                    padding-top: 10px; padding-bottom: 10px;">{{$buyPrice*$cart->quantity}}</td>
                    <td style ="">
                        <form action="{{ url('remove-from-cart/'.$cart->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btnbtn-danger" style="background-color: #dc2626"><i class="fa fa-trash-o text-white"></i></button>
                        </form>
                    </td>
                </tr>
                @php $total += $buyPrice*$cart->quantity @endphp
            @endif

        @endforeach
    </tbody>
    <tfoot style="border-top:dashed grey; margin-top: 20px;">
        <tr style="">
            <td colspan="4"class="text-center" style="padding-top: 20px; padding-bottom: 14px">
                <a href="{{ url('/') }}"class="btnbtn-warning" style="margin-left: 100px"><iclass="fa fa-angle-left"></i>Continue Shopping</a>
                <a href="{{ route('check.out', $id) }}"><button class="btn btn-success" style="margin-left: 30px">Checkout</button></a>
            </td>
            <td colspan="4" style="padding-top: 20px; ">
                <h3><strong>Total {{ $total }} $<h3><strong>
            </td>
        </tr>
        
    </tfoot>
    @endauth
</table>



@endsection