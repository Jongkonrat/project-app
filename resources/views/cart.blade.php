@extends('layouts.app-master')

@section('content')

<!-- background-color: white; border-radius: 10px; padding: 18px; width: fit-content; 
box-shadow: 0px 10px 30px 5px rgb(0,0,0,.15); width:70%; margin: auto; margin-top: 7%; -->
<table class="border-collapse align-items-center" style="justify-item: center;box-shadow: 0px 10px 30px 5px rgb(0,0,0,.15);;
width:90%; margin: auto; margin-top: 7%; background-color: white; border-radius: 10px;">
    @auth
    <thead class="border-collapse" style="text-align: center; border-bottom: dashed grey; margin: 40px; ">
        <tr>
            <th style="padding-bottom: 1.2%; padding-top: 1.2%;">Product</th>
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
        @foreach( $carts as $cart )
            
            @if($cart -> customerNumber == $id)
                <tr>
                    <td class="inner-table" style="text-align: center; padding-right: 20px; 
                    padding-left: 20px; padding-top: 10px; padding-bottom: 10px;">{{ $cart -> productCode  }}</td>
                    <td class="inner-table" style="padding-right: 20px; padding-left: 20px;
                    padding-top: 10px; padding-bottom: 10px;">{{ $cart -> productName  }}</td>
                    <td class="inner-table" style="text-align: center; padding-right: 20px; padding-left: 20px;
                    padding-top: 10px; padding-bottom: 10px;">{{ $cart->buyPrice }}</td>
                    <td class="inner-table" style="text-align: center; padding-right: 20px; padding-left: 20px;
                    padding-top: 10px; padding-bottom: 10px;">{{ $cart->quantity }}
                    <td data-th="Subtotal" class="text-center" style="padding-right: 20px; padding-left: 20px;
                    padding-top: 10px; padding-bottom: 10px;">{{$cart->buyPrice*$cart->quantity}}</td>
                    <td style ="">
                        <form action="{{ url('remove-from-cart/'.$cart->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btnbtn-danger" "><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
                @php $total += $cart->buyPrice*$cart->quantity @endphp
            @endif

        @endforeach
    </tbody>
    <tfoot style="border-top:dashed grey; margin-top: 20px;">
        <tr style="">
            <td colspan="4"class="text-center" style="padding-top: 20px; padding-bottom: 14px">
                <a href="{{ url('/') }}"class="btnbtn-warning" style="margin-left: 100px"><iclass="fa fa-angle-left"></i>Continue Shopping</a>
                <button class="btn btn-success" style="margin-left: 30px">Checkout</button>
            </td>
            <td colspan="4" style="padding-top: 20px; ">
                <h3><strong>Total {{ $total }} $<h3><strong>
            </td>
        </tr>
        
    </tfoot>
    @endauth
</table>



@endsection