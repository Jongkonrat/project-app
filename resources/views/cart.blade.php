@extends('layouts.app-master')

@section('content')
<div style="margin-top: 7%; background-color: white; border-radius: 10px; padding: 18px; width: fit-content; 
box-shadow: 0px 10px 30px 5px rgb(0,0,0,.15)">
<table >
    @auth
    <thead style="text-align: center; border-bottom: dashed black;">
        <tr>
            <th style="padding-bottom: 1.2%;">Product</th>
            <th style="padding-bottom: 1.2%; width: 30%;">Name</th>
            <th style="padding-bottom: 1.2%;">Price</th>
            <th style="padding-bottom: 1.2%;">Quantity</th>
            <th style="padding-bottom: 1.2%;"class="text-center">Subtotal</th>
            <th style="padding-bottom: 1.2%;"></th>
        </tr>
    </thead>
    <tbody style="">
    @php 
    $total = 0 ;
    $id = auth()->user()->id;
    
    @endphp
        @foreach( $carts as $cart )
            
            @if($cart -> customerNumber == $id)
                <tr>
                    <td class="inner-table" style="text-align: center;">{{ $cart -> productCode  }}</td>
                    <td class="inner-table" style="">{{ $cart -> productName  }}</td>
                    <td class="inner-table" style="text-align: center;">{{ $cart->buyPrice }}</td>
                    <td class="inner-table" style="text-align: center;">{{ $cart->quantity }}
                    <td data-th="Subtotal" class="text-center" style="">{{$cart->buyPrice*$cart->quantity}}</td>
                    <td style ="justify-content: flex-end; padding-top: 5px;">
                        <form action="{{ url('remove-from-cart/'.$cart->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btnbtn-danger" ><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
                @php $total += $cart->buyPrice*$cart->quantity @endphp
            @endif

        @endforeach
    </tbody>
    <tfoot style="border-top:dashed black; margin-top: 20px;">
        <tr style="">
            <td colspan="6"class="text-center" style="padding-top: 10px;">
                <a href="{{ url('/') }}"class="btnbtn-warning" style="margin-left: 100px"><iclass="fa fa-angle-left"></i>Continue Shopping</a>
                <button class="btn btn-success" style="margin-left: 30px">Checkout</button>
            </td>
            <td colspan="6" style="text-align: end; padding-top: 10px;"><h3><strong>Total {{ $total }}<h3><strong></td>
        </tr>
        
    </tfoot>
    @endauth
</table>
</div>


@endsection