@extends('layouts.app-master')

@section('content')

<table>
    @auth
    <thead>
        <tr>
            <th style="width:10%">Product</th>
            <th style="width:20%">Name</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%"class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
    @php 
    $total = 0 ;
    $id = auth()->user()->id;
    @endphp
        @foreach( $carts as $cart )
            
            @if($cart -> customerNumber == $id)
                <tr>
                    <td class="inner-table">{{ $cart -> customerNumber  }}</td>
                    <td class="inner-table">{{ $id  }}</td>
                    <td class="inner-table">{{ $cart->buyPrice }}</td>
                    <td class="inner-table">{{ $cart->quantity }}
                    <td data-th="Subtotal" class="text-center">{{$cart->buyPrice*$cart->quantity}}</td>
                    <td>
                        <form action="{{ url('remove-from-cart/'.$cart->productCode) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btnbtn-danger"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
                @php $total += $cart->buyPrice*$cart->quantity @endphp
            @endif

        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><h3><strong>Total {{ $total }}<h3><strong></td>
        </tr>
        <tr>
            <td colspan="5"class="text-right">
                <a href="{{ url('/') }}"class="btnbtn-warning"><iclass="fa fa-angle-left"></i>Continue Shopping</a>
                <button class="btn btn-success">Checkout</button>
            </td>
        </tr>
    </tfoot>
    @endauth
</table>
@endsection