@extends('admin.layout_admin')

@section('content')
            <!-- フラッシュメッセージ -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
            @endif

            @if (session('flash_message'))
            <div class="flash_message">
                {{ session('flash_message') }}
            </div>
            @endif
                <h1>商品追加画面</h1>
                <form action="{{ route('add.product') }}" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" name="product_image"> 
                    </div>
                    <div class="form-group">
                        <input type="text" name="product_name" placeholder="商品名"/>
                    </div>
                    <div class="form-group">
                        <textarea name="product_description" placeholder="商品説明を書いてください。" cols="45" rows="8"></textarea>
                        <!--<input type="text" class="form-control" rows="3" name="product_description" placeholder="商品説明"/>-->
                    </div>
                    <div class="form-group">
                        <input type="text" name="price" placeholder="価格"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="stock" placeholder="在庫数"/>
                        {!! Form::select('unit_id', $units, null) !!}
                    </div>
                    <div class="text-center">
                    <button type="submit" class="btn btn-primary">商品追加</button>
                    {{ csrf_field() }}
                    </div>
                </form>
@endsection
