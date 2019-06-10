<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>フルーツ☆パラダイス</title>
</head>
<body>
    @if (count($errors) > 0)
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
    <h1>単位追加画面</h1>
     <form action="{{ route('product.unit') }}" method="post">
                <div class="form-group">
                    <input type="text" name="name" placeholder="単位"> 
                </div>
                <button type="submit" class="btn btn-primary">単位追加</button>
                {{ csrf_field() }}
</form>
    
</body>
</html>
