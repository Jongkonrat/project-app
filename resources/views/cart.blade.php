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
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @foreach( $carts as $cart )
        <tr>
            @php $total += $cart->price*$cart->quantity @endphp
            <td>
                <div class="row">
                    <div class="col-sm-3 hidden-xs"><img src="{{ $cart->image }}" width="100" height="100" class="img-responsive" /></div>
                    <div class="col-sm-9">
                    </div>
                </div>
            </td>
            <td>{{ $cart->name }}</td>
            <td class="inner-table">{{ $cart->price }}</td>
            <td class="inner-table">{{ $cart->quantity }}
            <td data-th="Subtotal" class="text-center">{{$cart->price*$cart->quantity}}</td>
            <td>
                <form action="{{ url('remove-from-cart/'.$cart->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right">
                <h3><strong>Total {{ $total }}
                        <h3><strong>
            </td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <button class="btn btn-success">Checkout</button>
            </td>
        </tr>
    </tfoot>
    @endauth
</table>
@endsection