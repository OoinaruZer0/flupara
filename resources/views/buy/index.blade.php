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
                        {{ $details['quantity'] }}
                    </td>
                    <td data-th="Unit">
                        @foreach($units as $unit)
                            @if($unit->id == $details['unit'])
                                <?php echo $unit->name ?>
                            @endif
                        @endforeach
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }}円</td>
                </tr>
            @endforeach
        @endif
        </table>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <a href="{{ route('cart') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i>カートに戻る</a>
                </div>
                <div class="col-12 col-sm-4 text-right">
                    <?php
                        $total = $total + $DeliveryFee + $CashOnDeliveryFee;
                        echo "配送料".$DeliveryFee."円<br>代引き手数料".$CashOnDeliveryFee."円<br><strong>合計".$total."円</strong>";
                    ?>
                </div>
                <div class="col-12 col-sm-2">
                    <button type="submit" class="btn btn-primary" name="post">注文を確定する</button>
                </div>
            </div>
        </div>
@endsection
  
@section('scripts')
  
@endsection
