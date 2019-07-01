@extends('layout')
  
@section('content')
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
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <a href="{{ route('product.list') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i>商品一覧ページに戻る</a>
                </div>
                @if(!$cart)
                <?php echo "商品を追加してください"; ?>
                @else
                
                <div class="col-12 col-sm-4 text-right">
                    <?php
                        $total = $total + $DeliveryFee + $CashOnDeliveryFee;
                        echo "配送料".$DeliveryFee."円<br>代引き手数料".$CashOnDeliveryFee."円<br><strong>合計".$total."円</strong>";
                    ?>
                </div>
                @endif
                <div class="col-12 offset-sm-2"></div>
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
