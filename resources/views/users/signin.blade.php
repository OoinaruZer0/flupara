<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>松本青果店</title>
    <!--CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <!-- Original CSS -->
	  <link rel="stylesheet" href="../../css/fluprara.css">
	  
	<!-- social btn CSS for Bootstrap -->
	<link rel="stylesheet" href="../../css/bootstrap-social.css">
	  <!-- web Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP|Sawarabi+Mincho&display=swap" rel="stylesheet">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 
</head>

<body>

	<header>
		@if (session('flash_message'))
  			<div class="flash_message">
    			{{ session('flash_message') }}
  			</div>
		@endif
		<!-- モバイル用ヘッダー -->
		<div class="d-lg-none">
			<nav class="container-fluid navbar navbar-light fixed-top py-2 bg-nav shadow">
				<div class="container">
					<a class="navbar-brand w-25" href="{{ route('index') }}"><img src="https://flupara-20190818.s3-ap-northeast-1.amazonaws.com/logo1-8.png" class="w-100" alt="松本青果店"></a>
					<div class="ml-auto w-25"><a class="clearfix" href="{{ route('cart') }}"><img src="https://flupara-20190818.s3-ap-northeast-1.amazonaws.com/cart-green-8.png" class="float-right w-50 py-2 pr-3" alt="カートを見る"></a></div>

					<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse w-100 mt-2 bg-nav-orange" id="navbarToggleExternalContent">
						<ul class="list-unstyled">
							<a class="text-success" href="{{ route('index') }}">
								<li class="py-2">ホーム</li>
							</a>
							<a class="text-success" href="{{ route('product.list') }}">
								<li class="py-2">商品一覧</li>
							</a>
							<a class="text-success" href="{{ route('about') }}">
								<li class="py-2">当サイトについて</li>
							</a>
							<a class="text-success" href="{{ route('cart') }}">
								<li class="py-2">カートを見る</li>
							</a>
							@if( Auth::check() )
              				<a class="text-success" href="{{ route('users.logout') }}">
								<li class="py-2">ログアウト</li>
							</a>
              				@else
            				<a class="text-success" href="{{ route('users.signin') }}">
								<li class="py-2">ログイン</li>
							</a>
              				@endif
						</ul>
					</div>
				</div>
			</nav>
			<div class="jumbotron-fluid"></div>
		</div>
		<!-- PC用ヘッダー -->
		<div class="d-none d-lg-block">
			<div class="logobar fixed-top container-fluid py-3 bg-translucent">
				<div class="row">
					<p>老舗が厳選した産直フルーツ</p>
				</div>
				<div class="row">
					<div class="logo-lg mx-auto"><img src="https://flupara-20190818.s3-ap-northeast-1.amazonaws.com/logo1-8.png" class="w-100" alt="松本青果店"></div>
				</div>
				<div class="row pt-2">
					<p>~ あなたの元気は、ここにある ~</p>
				</div>
			</div>
			</div>
		</div>
	</header>
	
    <main class="main-bg">
    	<nav class="container-fluid d-none d-lg-block navbar navbar-light sticky-top bg-nav">
			<div class="container">
				<ul class="row w-100 py-2 list-inline list-unstyled">
					<li class="list-inline-item col-lg text-center"><a class="d-block text-success" href="{{ route('index') }}"><img src="https://flupara-20190818.s3-ap-northeast-1.amazonaws.com/home-green-8.png" alt="ホーム">ホーム</a></li>
					<li class="list-inline-item col-lg text-center"><a class="d-block text-success" href="{{ route('product.list') }}"><img src="https://flupara-20190818.s3-ap-northeast-1.amazonaws.com/list-green-8.png" alt="商品一覧">商品一覧</a></li>
					<li class="list-inline-item col-lg-3 text-center"><a class="d-block text-success" href="{{ route('about') }}"><img src="https://flupara-20190818.s3-ap-northeast-1.amazonaws.com/bubble-green-8.png" alt="当サイトについて">当サイトについて</a></li>
					<li class="list-inline-item col-lg-3 text-center"><a class="d-block text-success" href="{{ route('cart') }}"><img src="https://flupara-20190818.s3-ap-northeast-1.amazonaws.com/cart-green-8.png" alt="カートを見る">カートを見る</a></li>
					@if( Auth::check() )
            		<li class="list-inline-item col-lg text-center"><a class="d-block text-success" href="{{ route('users.logout') }}"><img src="https://flupara-20190818.s3-ap-northeast-1.amazonaws.com/login-green-8.png" alt="ログアウト">ログアウト</a></li>
            		@else
            		<li class="list-inline-item col-lg text-center"><a class="d-block text-success" href="{{ route('users.signin') }}"><img src="https://flupara-20190818.s3-ap-northeast-1.amazonaws.com/login-green-8.png" alt="ログイン">ログイン</a></li>
            		@endif
				</ul>
			</div>
		</nav>
		<div class="container blank-lg-150px pt-3"></div>
        <div class="container">
    <!--フラッシュメッセージ-->
            @if (session('flash_message'))
            <div class="flash_message">
                {{ session('flash_message') }}
            </div>
            @endif
            <!--フラッシュメッセージ終了-->
            @if(count($errors) >0)
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
            </div>
            @endif
			<nav aria-label="breadcrumb" role="navigation">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page"><a class="text-success" href="{{ route('index') }}">ホーム</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a class="text-success" href="{{ route('users.signin') }}">ログイン</a></li>
				</ol>
			</nav>
		</div>
		<div class="container blank pt-5">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<h4 class="pb-3">ログイン</h4>
					<form action="{{ route('users.signin') }}" method="post">
						<div class="form-group my-4">
							<label>メールアドレス</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="メールアドレス">
						</div>
						<div class="form-group my-4">
							<label>パスワードを入力</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="パスワード">
						</div>
						<button class="btn btn-lg btn-success my-4" type="submit">ログイン</button>
						{{ csrf_field() }}
					</form>
				</div>
			</div>
		</div>
    </main>

  <!--	インフォメーション開始-->
  <footer class="pb-5">
		<div class="container-fluid py-4">
			<div class="container pt-3">
				<div class="row py-3 my-lg-3">
					<div class="col-lg-4 text-center text-lg-right text-lg-left ml-lg-auto">
						<a href="#" class="mx-1 btn btn-lg btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="mx-2 btn btn-lg btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="mx-2 btn btn-lg btn-social-icon btn-pinterest"><i class="fa fa-pinterest"></i></a>
						<a href="#" class="mx-2 btn btn-lg btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
						<div class="col-3"></div>
					</div>
				</div>
				<div class="d-lg-flex flex-lg-row-reverse my-4">
					<!-- メニュー -->
					<ul class="col-lg-4 mt-lg-4 list-unstyled">
						<li><a href="{{ route('index') }}" class="d-block text-center text-lg-left text-white">HOME</a></li>
						<li><a href="{{ route('product.list') }}" class="d-block text-center text-lg-left text-white">商品一覧</a></li>
						<li><a href="{{ route('about') }}" class="d-block text-center text-lg-left text-white">当サイトについて</a></li>
						<li><a href="{{ route('users.signin') }}" class="d-block text-center text-lg-left text-white">ログイン</a></li>
						<li><a href="{{ route('cart') }}" class="d-block text-center text-lg-left text-white">カートを見る</a></li>
						<li><a href="{{ route('law') }}" class="d-block text-center text-lg-left text-white">特定商取引法に基づく表記</a></li>
						<li><a href="{{ route('policy') }}" class="d-block text-center text-lg-left text-white">プライバシーポリシー</a></li>
					</ul>
					<!-- お問い合わせ先 -->
					<div class="col-lg-8 mt-5 mt-lg-0">
						<p class="text-center text-lg-left text-white">お問い合わせ先</p>
						<p class="text-center text-lg-left text-white py-lg-3">松本青果店</p>
						<p class="text-center text-lg-left text-white">〒000-0000<br>
							神奈川県 横浜市 〇〇区 〇〇通 12-3-4<br>
							TEL:XXX-XXX-XXXX<br>
							e-mail:eje84smg3uy@gmail.com</p>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row my-4">
				<div class="col">
					<!-- copyright -->
					<p class="text-center text-white">2019 (c) BA-SHOW and R.Aoi<br>
						Do not use the images in this website<span><a href="{{ route('admin.signin') }}">.</a></span></p>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>
