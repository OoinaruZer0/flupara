@extends('layout')
  
@section('content')
<!--フラッシュメッセージ-->
@if (session('flash_message'))
  <div class="flash_message">
    {{ session('flash_message') }}
  </div>
@endif
    <div><h1>RECOMMEND</h1></div>
    <div><h1>ランキング</h1></div>
    <div><h1>ニュース</h1></div>
    <div><h1>特集</h1></div>
  
@endsection
  
@section('scripts')
  
@endsection
