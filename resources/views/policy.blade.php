@extends('layout')
  
@section('content')
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
			<nav aria-label="breadcrumb" role="navigation">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page"><a class="text-success" href="{{ route('index') }}">ホーム</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a class="text-success" href="{{ route('about') }}">当サイトについて</a></li>
				</ol>
			</nav>
		</div>
		<article class="container blank pt-3">
			<h2>個人情報の取り扱いについて</h2>
			<p class="mb-5">当ショップは、お客様、および採用担当者様の個人情報保護の重要性について認識し、
				個人情報の保護に関する法律（以下「個人情報保護法」といいます。）を遵守すると共に、
				以下のプライバシーポリシー（以下「本プライバシーポリシー」といいます。）に従い、
				適切な取扱い及び保護に努めます。</p>
			<section class="mb-5">
				<h5 class="mb-3 fontsize-24">1.個人情報の定義</h5>
				<p>本プライバシーポリシーにおいて、個人情報とは、個人情報保護法第2条第1項により定義された個人情報、
					すなわち、生存する個人に関する情報であって、当該情報に含まれる氏名、
					生年月日その他の記述等により特定の個人を識別することができるもの
					（他の情報と容易に照合することができ、それにより特定の個人を識別することができることとなるものを含みます。）、
					もしくは個人識別符号が含まれる情報を意味するものとします。</p>
			</section>
			<section class="mb-5">
				<h5 class="mb-3 fontsize-24">2.個人情報の利用目的</h5>
				<p>当ショップはwebエンジニア志望者が就職活動の為に作ったサイトです。よって、個人情報は一切使用致しません。</p>
			</section>
			<section class="mb-5">
				<h5 class="mb-3 fontsize-24">3.個人情報利用目的の変更</h5>
				<p>当ショップは、個人情報の利用目的を一切変更することはありません。</p>
			</section>
			<section class="mb-5">
				<h5 class="mb-3 fontsize-24">4.個人情報利用の制限</h5>
				<p>当ショップは、個人情報を一切使用致しません。</p>
			</section>
			<section class="mb-5">
				<h5 class="mb-3 fontsize-24">5.個人情報の適正な取得</h5>
				<p>当ショップは、ユーザーの新規会員登録ができないようになっています。
					そのため、個人情報は一切取得致しません。万一何かしらの方法で登録された場合、その個人情報は一切使用致しません。</p>
			</section>
			<section class="mb-5">
				<h5 class="mb-3 fontsize-24">6.個人情報の安全管理</h5>
				<p>採用担当者様は、実際の人物の情報を登録に使用しないようご注意ください。
					悪意ある人物により実際の人物の情報が登録された場合、その個人情報の紛失、破壊、改ざん及び漏洩などのリスクに対して、
					個人情報の安全管理が図られるよう、当ショップ運営者は、必要かつ適切な監督を行います。
					また、当ショップは、個人情報の取扱いの全部又は一部を委託することはありません</p>
			</section>
			<section class="mb-5">
				<h5 class="mb-3 fontsize-24">7.第三者提供</h5>
				<p>当ショップは、個人情報を第三者に提供しません。</p>
			</section>
			<section class="mb-5">
				<h5 class="mb-3 fontsize-24">8.個人情報の開示</h5>
				<p>当ショップは、採用担当者様から、個人情報保護法の定めに基づき個人情報の開示を求められたときは、
					採用担当者様ご本人からのご請求であることを確認の上で、採用担当者様に対し、
					遅滞なく開示を行います（当該個人情報が存在しないときにはその旨を通知いたします。）。
					但し、個人情報保護法その他の法令により、当ショップが開示の義務を負わない場合は、この限りではありません。</p>
			</section>
			<section class="mb-5">
				<h5 class="mb-3 fontsize-24">9.個人情報の訂正等</h5>
				<p>当ショップは、採用担当者様から、個人情報保護法の定めに基づきその内容の訂正、
					追加又は削除（以下「訂正等」といいます。）を求められた場合には、利用目的の達成に必要な範囲内において、
					遅滞なく必要な調査を行い、その結果に基づき、個人情報の内容の訂正等を行い、
					その旨を採用担当者様に通知します（訂正等を行わない旨の決定をしたときは、採用担当者様に対しその旨を通知いたします。）。
					但し、個人情報保護法その他の法令により、当ショップが訂正等の義務を負わない場合は、この限りではありません。</p>
			</section>
			<section class="mb-5">
				<h5 class="mb-3 fontsize-24">10.個人情報の利用停止等</h5>
				<p>当ショップは、採用担当者様から、採用担当者様の個人情報が、あらかじめ公表された利用目的の範囲を超えて取り扱われているという理由
					又は偽りその他不正の手段により取得されたものであるという理由により、
					個人情報保護法の定めに基づきその利用の停止又は消去（以下「利用停止等」といいます。）を求められた場合において、
					そのご請求に理由があることが判明した場合には、採用担当者様ご本人からのご請求であることを確認の上で、遅滞なく個人情報の利用停止等を行い、
					その旨を採用担当者様に通知します。但し、個人情報保護法その他の法令により、
					当ショップが利用停止等の義務を負わない場合は、この限りではありません。</p>
			</section>
			<section class="mb-5">
				<h5 class="mb-3 fontsize-24">11.Cookie（クッキー）その他の技術の利用</h5>
				<p>当ショップのサービスは、Cookie及びこれに類する技術を利用することがあります。
					これらの技術は、当ショップによる当ショップのサービスの利用状況等の把握に役立ち、サービス向上に資するものです。
					Cookieを無効化されたい採用担当者様は、ウェブブラウザの設定を変更することによりCookieを無効化することができます。
					但し、Cookieを無効化すると、当ショップのサービスの一部の機能をご利用いただけなくなる場合があります。</p>
			</section>
			<section class="mb-5">
				<h5 class="mb-3 fontsize-24">12.お問い合わせ</h5>
				<p>開示等のお申出、ご意見、ご質問、苦情のお申出その他個人情報の取扱いに関するお問い合わせは、
					当ショップの「特定商取引法に基づく表記」内にある連絡先へご連絡ください。</p>
			</section>
			<section class="mb-5">
				<h5 class="mb-3 fontsize-24">13.継続的改善</h5>
				<p>当ショップは、個人情報の取扱いに関する運用状況を適宜見直し、継続的な改善に努めるものとし、
					必要に応じて、本プライバシーポリシーを変更することがあります。</p>
			</section>
		</article>
@endsection
