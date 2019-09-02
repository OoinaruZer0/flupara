@extends('layout')
 
@section('content')
		<div class="container">
			<nav aria-label="breadcrumb" role="navigation">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page"><a class="text-success" href="{{ route('index') }}">ホーム</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a class="text-success" href="{{ route('about') }}">当サイトについて</a></li>
				</ol>
			</nav>
		</div>
		<article class="container blank pt-3">
			<section class="mb-5">
				<h2>松本青果店（旧・フルーツ☆パラダイス）について</h2>
				<p class="mb-5">松本青果店（旧・フルーツ☆パラダイス）は、<br>
					「あなたの元気は、ここにある」をコンセプトに、健康志向のフルーツをご紹介し販売する通販サイトです。<br>
					当サイトはWebエンジニア志望者のポートフォリオサイトであり、商品の購入はできませんので、<br>
					採用担当者様以外は当ショップのどの機能も使用せずにご退場くださいますようお願い申し上げます。</p>
			</section>
			<section class="mb-5">
				<h2>ご挨拶</h2>
				<h5 class="mb-3 fontsize-24">＝ システム/発案 担当　BA-SHOW ＝</h5>
				<p>初めまして、BA-SHOWと申します。<br>
					WEB上に公開しているサイトのため、ニックネームでの自己紹介になりますが、ご了承ください。<br>
					私はWEBエンジニアを目指す30代の駆け出しエンジニアです。<br>
					当サイトは、現在の私のスキルをご理解していただくために制作致しました。<br>
					宜しければ、ご査収くださいますようお願い申し上げます。<br>
					ユーザーや管理者のログイン情報は職務経歴書に載せておきますので、そちらでログインしてサイトの機能をご確認ください。<br>
					注意点として、ユーザーの新規会員登録機能へのリンクが管理者ページにあるのですが、こちらを試す際は<br>
					実際の人物の情報で登録せず、適当な名前や電話番号で新規登録機能をお試しくださいますよう、よろしくお願い申し上げます。<br>
					プライバシーポリシーにも同様のことが書いてありますので、ご確認ください。</p>
				<p class="text-right fontsize-18">2019/XX/XX　BA-SHOW</p>
				<h5 class="mb-3 fontsize-24">＝ デザイン/コーディング 担当　R.Aoi ＝</h5>
				<p>はじめまして。この度主にデザイン面を担当させていただきました、ペンネーム・あおいりかと申します。<br>
					未経験ではありますが、なるべく早くお力になれますようweb制作の練習をさせて頂いております。<br>
					実際に作りながら覚えると言う方針ですので、現在ではご覧の通りまだまだ未熟ではありますが、<br>
					制作日誌も合わせてご高覧いただけますと幸いです。</p>
				<p class="text-right fontsize-18">2019/8/15　R.Aoi</p>
			</section>
			<section class="mb-5">
				<h2>搭載した機能</h2>
				<p>搭載した機能は以下の通りです。</p>
				<h5 class="mb-3 fontsize-24">ユーザー側</h5>
				<ul>
					<li>会員登録機能（実際の登録には管理者ログインの必要があります。）</li>
					<li>ログイン機能</li>
					<li>ショッピングカート機能</li>
				</ul>
				<h5 class="mb-3 fontsize-24">管理者側</h5>
				<ul>
					<li>ログイン機能</li>
					<li>商品追加機能</li>
					<li>単位追加機能</li>
				</ul>
			</section>
			<section class="mb-5">
				<h2>使用した技術</h2>
				<h5 class="mb-3 fontsize-24">開発環境</h5>
				<p>Cloud9</p>
				<h5 class="mb-3 fontsize-24">言語・フレームワーク</h5>
				<ul>
					<li>HTML</li>
					<li>CSS</li>
					<li>jQuery</li>
					<li>Bootstrap v4</li>
					<li>PHP</li>
					<li>Laravel</li>
				</ul>
				<h5 class="mb-3 fontsize-24">使用プラットフォーム</h5>
				<p>Heroku</p>
			</section>
		</article> 

@endsection

