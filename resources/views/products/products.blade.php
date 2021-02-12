@extends('layouts.welcome')
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
            <div class="overlay_info d_flex">
                <img src="{{ asset('img/icon.svg')}}" alt="">
                <h5><a href="products">{{ $product['titolo'] }}</a></h5>
                <p>cottura: {{ $product['cottura'] }}</p>
                <p>peso: {{ $product['peso'] }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection
