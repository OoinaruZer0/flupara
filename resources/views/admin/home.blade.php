<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>フルーツ☆パラダイス</title>
</head>
<body>
    <a href="{{ route('index') }}">通常画面に戻る</a>
    <ul>
        <li>注文一覧</li>
        <li><a href="{{ route('add.product') }}">商品追加</a></li>
        <li>商品一覧</li>
        <li><a href="{{ route('admin.logout') }}">ログアウト</a></li>
        <li><a href="{{ route('product.unit') }}">単位追加</a></li>
        <li><a href="{{ route('users.signup') }}">新規会員登録</a></li>
    </ul>
    
</body>
</html>
