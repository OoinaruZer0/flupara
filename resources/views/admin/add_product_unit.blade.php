<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>フルーツ☆パラダイス</title>
</head>
<body>
    <h1>単位追加画面</h1>
     <form action="{{ route('product.unit') }}" method="post">
                <div class="form-group">
                    <input type="text" name="product_unit" placeholder="単位"> 
                </div>
                <button type="submit" class="btn btn-primary">単位追加</button>
                {{ csrf_field() }}
</form>
    
</body>
</html>
