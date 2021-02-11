@extends('layouts.welcome')
<h1>Products</h1>
@section('product-content')
    
<div class="product_content d_flex">
    @foreach ($data as $product)
        @if ($loop->first)
            <h2 class="title">Le lunghe</h2>
        @endif
        @if ($loop->last)
            <h2 class="title">Le cortissime</h2>
        @endif
        @if ($loop->iteration === 6)
        <h2 class="title">Le corte</h2>
        @endif
        <div class="card">
            <img src="{{ $product['src'] }}" alt="">
            <h4> {{ $product['titolo'] }}</h4>
        </div>
    @endforeach
</div>
@endsection
