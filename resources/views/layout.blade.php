<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>フルーツ☆パラダイス</title>
    <!--CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
</head>
<body>
    <!--ヘッダー開始-->
    <header>
    <nav class="navbar navbar-expand-sm navbar-light bg-warning justify-content-center header-nav">
      <div class="container-fluid header">
        <div class="row header-row">
          <div class="col-12 hdlogo"><a class="navbar-brand" href="{{ route('index') }}">フルーツ☆パラダイス</a></div>
          <div class="col-12">
            <ul class="navbar-nav">
            <li class="nav-item header-list"><a href="{{ route('index') }}" class="nav-link">Home</a></li>
            <li class="nav-item header-list"><a href="{{ route('about') }}" class="nav-link">当サイトについて</a></li>
            <li class="nav-item header-list"><a href="{{ route('law') }}" class="nav-link">特定商取引法に基づく表記</a></li>
            <li class="nav-item header-list"><a href="{{ route('policy') }}" class="nav-link">プライバシーポリシー</a></li>
            <li class="nav-item header-list"><a href="{{ route('product.list') }}" class="nav-link">商品一覧</a></li>
            <li class="nav-item header-list"><a href="{{ route('cart') }}" class="nav-link text-center">カート</a></li>
            @if( Auth::check() )
            <li class="nav-item header-list"><a href="{{ route('users.logout') }}" class="nav-link">ログアウト</a></li>
            @else
            <li class="nav-item header-list"><a href="{{ route('users.signin') }}" class="nav-link">ログイン</a></li>
            @endif
          </ul>
          </div>
        </div>
      </div>
    </nav>
    </header>
    <!--ヘッダー終了-->
    <main>
        @yield('content')
    </main>

  <!--	インフォメーション開始-->
  <div class="container-fluid">
    <div class="row text-muted">
      <div class="col-12 col-sm-6">
        <h2 class="text-center mb-3">E-mail</h2>
        <p class="text-center mb-0">contact@domain.com</p>
        <p class="text-center mb-3">office@domain.com</p>
      </div>
      <div class="col-12 col-sm-6">
          <nav class="navbar navbar-expand-md navbar-light justify-content-center">
            <ul class="nav navbar-nav my-3 list-inline">
                <li class="nav-item"><a href="#" class="nav-link"><i class="fab fa-facebook social-icon-color">FACEBOOK</i></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="fab fa-twitter-square social-icon-color">TWITTER</i></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="fab fa-instagram social-icon-color">INSTAGRAM</i></a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="fab fa-linkedin social-icon-color">LINKEDIN</i></a></li>
            </ul>
          </nav>
      </div>
    </div>
  </div>
  <!--	インフォメーション終了-->
<!--フッター開始-->
<footer class="text-muted blackbackground">
  <div class="container-fluid p-4">
    <p class="text-center mb-0">Copyright 2019, BA-SHOW</p>
    <p class="text-center mb-0">All images is downloaded from "food<span><a href="{{ route('admin.signin') }}">.</a></span>foto". Do not use the images in your website.</p>
  </div>
</footer>
    @yield('scripts')
</body>
</html>
