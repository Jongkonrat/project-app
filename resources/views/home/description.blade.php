@extends('layouts.app-master')

@section('content')
<h1>Description page</h1>

<h4>{{$products->productName }}</h4>
<p>{{ $products->productDescription }}</p>
<p>{{ $products->quantityInStock }}</p>
<p>{{$products->productLine}}</p>
<p>{{$products->productVendor}}</p>
<p><strong>Price: </strong>{{ $products->buyPrice }}$</p>



@endsection