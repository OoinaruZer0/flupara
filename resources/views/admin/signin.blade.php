<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>フルーツ☆パラダイス</title>
</head>
<body>
    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <!--フラッシュメッセージ-->
            @if (session('flash_message'))
            <div class="flash_message">
                {{ session('flash_message') }}
            </div>
            @endif
            <!--フラッシュメッセージ終了-->
            <a href="{{ route('index') }}">通常画面に戻る</a>
            <h1>管理者ログイン</h1>
            @if(count($errors) >0)
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
            </div>
            @endif
        </div>
        <form action="{{ route('admin.signin') }}" method="post">
            <div class="form-group">
            <label>メールアドレス</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="メールアドレス">
        </div>
        <div class="form-group">
            <label>パスワードを入力</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="パスワード">
        </div>
        <button type="submit" class="btn btn-primary">ログイン</button>
          {{ csrf_field() }}
        </form>
    </div>
</div>
    
</body>
</html>