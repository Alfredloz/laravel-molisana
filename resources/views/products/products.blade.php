@extends('layouts.welcome')
<h1>Products</h1>
@section('product-content')
    
@foreach ($data as $product)
    <h4> {{ $product['titolo'] }}</h4>
    <p> {{ $product['descrizione'] }}</p>
@endforeach
@endsection
