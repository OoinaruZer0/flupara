@extends('layout')
  
@section('content')
<h1>商品一覧</h1>
<div class="container-fluid">
    <div class="row">
        @foreach($products as $product)
        <div class="col-12 col-sm-6 col-lg-4">
            <img src="{{ $product->product_image }}" class="img-fluid" alt="商品イメージ">
            <h2>{{ $product->product_name }}</h2>
            <p>価格 {{ $product->price }} 円</p>
            <a href="{{ route('product.show') }}">商品詳細</a>
            
        </div>
        @endforeach
    </div>
</div>
  
@endsection
  
@section('scripts')
  
@endsection