@extends('layout')
  
@section('content')
<!--フラッシュメッセージ-->
@if (session('flash_message'))
  <div class="flash_message">
    {{ session('flash_message') }}
  </div>
@endif
<h1>新着</h1>
  <div class="container-fluid">
    <div class="row">
    @foreach($products as $product)
      <div class="col-12 col-sm-6 col-md-4">
        <div class="thumbnail">
        <img src="{{ $product->product_image }}" class="img-fluid" alt="商品イメージ">
          <div class="caption">
          <h2>{{ $product->product_name }}</h2>
          <p>価格 {{ $product->price }} 円</p>
          </div>
        </div>
      </div>
  @endforeach
</div>
</div>
  
@endsection
  
@section('scripts')
  
@endsection
