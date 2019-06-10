@extends('layout')

@section('content')
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
            <h1>ログイン</h1>
            @if(count($errors) >0)
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
            </div>
            @endif
        </div>
        <form action="{{ route('users.signin') }}" method="post">
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

@endsection

@section('scripts')
@endsection