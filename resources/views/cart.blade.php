@extends('layout')
  
@section('content')
		<div class="container">
			<nav aria-label="breadcrumb" role="navigation">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active" aria-current="page"><a class="text-success" href="{{ route('index') }}">ホーム</a></li>
					<li class="breadcrumb-item active" aria-current="page"><a class="text-success" href="{{ route('cart') }}">カート</a></li>
				</ol>
			</nav>
		</div>
  <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:42%">商品</th>
            <th style="width:10%">価格</th>
            <th style="width:8%">数量</th>
            <th style="width:8%">単位</th>
            <th style="width:22%" class="text-center">商品別合計価格</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                <?php $total += $details['price'] * $details['quantity'] ?>
 
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-12 col-sm-3"><img src="{{ $details['product_image'] }}" width="100" height="100" class="img-fluid"/></div>
                            <div class="col-12 col-sm-9">
                                <h4 class="nomargin">{{ $details['product_name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{ $details['price'] }}円</td>
                    <td data-th="Quantity">
                        <input type="number" min="1" value="{{ $details['quantity'] }}" class="form-control quantity" />
                    </td>
                    <td data-th="Unit">
                        @foreach($units as $unit)
                            @if($unit->id == $details['unit'])
                                <?php echo $unit->name ?>
                            @endif
                        @endforeach
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }}円</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fas fa-sync-alt"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif
        </table>
        
        <div class="container mb-5">
			<div class="row">
				<div class="col-lg-6 offset-lg-6 py-3 bg-translucent">
					<dl class="row fontsize-24">
						<dt class="col-7">商品合計金額</dt>
						<dd class="col-5 text-right">
						<?php
						 echo $total."円";
						?>
						</dd>
						<dt class="col-7">配送料</dt>
						<dd class="col-5 text-right">
						    <?php echo $DeliveryFee."円"; ?>
						</dd>
						<dt class="col-7">代引き手数料</dt>
						<dd class="col-5 text-right">
						    <?php echo $CashOnDeliveryFee."円"; ?>
						</dd>
						<div class="col">
							<div class="row mt-5">
								<dt class="col-7">合計金額</dt>
								<dd class="col-5 text-right">
								    <?php
								    $total = $total + $DeliveryFee + $CashOnDeliveryFee;
								    echo $total;
								    ?>
								</dd>
							</div>
						</div>
					</dl>
				</div>
			</div>
		</div>
		<div class="container pt-5 blank">
			<div class="row">
				<p class="col-5 col-lg-4"><a href="{{ route('product.list') }}" class="btn btn-lg btn-success w-100">＜　商品一覧に戻る</a></p>
				@if( Auth::check() && $cart )
				<p class="offset-2 col-5 offset-lg-4 col-lg-4"><a href="#" class="btn btn-lg btn-success w-100">注文画面へ進む　＞</a></p>
				@else
                <div class="offset-sm-2"></div>
                @endif
			</div>
		</div>
		
@endsection
  
@section('scripts')
<script type="text/javascript">
 
        $(".update-cart").click(function (e) {
            
           e.preventDefault();
 
           var ele = $(this);
 
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });
 
        $(".remove-from-cart").click(function (e) {
            
            e.preventDefault();
 
            var ele = $(this);
 
            if(confirm("商品を削除しますか？")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
</script>
@endsection
