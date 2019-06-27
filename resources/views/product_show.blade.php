@extends('layout')

@section('content')
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
<h1>商品の詳細</h1>
<img src="{{ $product->product_image }}" class="img-fluid" alt="商品イメージ">
<p>{{ $product->product_name }}</p>
<p>{{ $product->product_description }}</p>
<p>価格 {{ $product->price }} 円</p>
<a href="{{ url('add-to-cart/'.$product->id) }}">カートに入れる。</a>
@endsection

@section('script')
@endsection
