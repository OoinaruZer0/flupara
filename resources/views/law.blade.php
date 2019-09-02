@extends('layout')
 
@section('content')
		<div class="container">
			<nav aria-label="breadcrumb" role="navigation">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page"><a class="text-success" href="{{ route('index') }}">ホーム</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a class="text-success" href="{{ route('law') }}">特定商取引法に基づく表記</a></li>
				</ol>
			</nav>
		</div>
		<article class="container blank pt-3">
			<h2>特定商取引法に基づく表記</h2>
			<p class="mb-5">当ショップは、お客様、および採用担当者様の個人情報保護の重要性について認識し、
				個人情報の保護に関する法律（以下「個人情報保護法」といいます。）を遵守すると共に、
				以下のプライバシーポリシー（以下「本プライバシーポリシー」といいます。）に従い、
				適切な取扱い及び保護に努めます。</p>
			<section class="mb-5">
				<h5 class="mb-3 fontsize-24">事業者の連絡先</h5>
				<dl>
					<dt class="fontsize-18">BA-SHOW e-mail</dt>
					<dd>eje84smg3uy@gmail.com</dd>
				</dl>
			</section>
			<section class="mb-5">
				<h5 class="mb-3 fontsize-24">販売価格について</h5>
				<p>販売価格は、表示されている価格と致しますが、
					当ショップはwebエンジニア志望者の就職活動のためのポートフォリオサイトのため、
					商品の購入はできませんのでご注意ください。</p>
			</section>
			<section class="mb-5">
				<h5 class="mb-3 fontsize-24">代金の支払い方法と時期</h5>
				<p>当ショップはwebエンジニア志望者が就職活動に為に作ったショップなので商品の販売はしておりません。
					よって、商品は購入できず、故に支払い方法はなく支払い時期も発生しないものとします。</p>
			</section>
			<section class="mb-5">
				<h5 class="mb-3 fontsize-24">役務または商品の引渡時期</h5>
				<p>当ショップはwebエンジニア志望者が就職活動の為に作ったショップのため、商品の購入及び引き渡しはできません。
					何かしらの方法で当サイトの機能を使って商品を購入しても、商品は届きませんのでご注意ください。
					また、運営者が注文に対し金銭を請求することもありません。</p>
			</section>
			<section class="mb-5">
				<h5 class="mb-3 fontsize-24">返品についての特約に関する事項</h5>
				<p>当ショップはwebエンジニア志望者が就職活動の為に作ったショップのため、
					商品の購入はできず、故に返品は発生致しません。</p>
			</section>
		</article>
@endsection
