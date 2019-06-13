<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>フルーツ☆パラダイス</title>
</head>
<body>
  
 <!-- フラッシュメッセージ -->
 @if ($errors->any())
<div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
@endif

@if (session('flash_message'))
            <div class="flash_message">
                {{ session('flash_message') }}
            </div>
@endif
    <h1>商品追加画面</h1>
    <form action="{{ route('add.product') }}" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="file" name="product_image"> 
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="product_name" placeholder="商品名"/>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="product_description" placeholder="商品説明"/>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="price" placeholder="価格"/>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="stock" placeholder="在庫数"/>
                  {!! Form::select('unit_id', $units, null, ['class' => 'form-control']) !!}
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary">商品追加</button>
                {{ csrf_field() }}
</form>
    
</body>
</html>
