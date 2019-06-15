@extends('layout')

@section('content')
<h1>商品の詳細</h1>
<img src="{{ $product->product_image }}" class="img-fluid" alt="商品イメージ">
<p>{{ $product->product_name }}</p>
<p>{{ $product->product_description }}</p>
<p>価格 {{ $product->price }} 円</p>
<a href="#">カートに入れる。</a>
@endsection

@section('script')
@endsection