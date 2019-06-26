@extends('admin.layout_admin')
 
@section('content')
   @if (count($errors) > 0)
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
    <form action="{{ route('users.signup') }}" method="post">
    <div class="form-row">
    <div class="form-group col-12 col-sm-6">
    <label>苗字</label>
    <input type="text" class="form-control" name="lastname" placeholder="苗字">
  </div>
  <div class="form-group col-12 col-sm-6">
    <label>名前</label>
    <input type="text" class="form-control" name="firstname" placeholder="名前">
  </div>
  <div class="form-group col-12 col-sm-6">
    <label>みょうじ</label>
    <input type="text" class="form-control" name="lastname_kana" placeholder="みょうじ">
  </div>
  <div class="form-group col-12 col-sm-6">
    <label>なまえ</label>
    <input type="text" class="form-control" name="firstname_kana" placeholder="なまえ">
  </div>
  <div class="form-group col-12 col-sm-6">
    <label>電話番号</label>
    <input type="tel" class="form-control" name="phone" placeholder="電話番号">
  </div>
  <div class="form-group col-12 col-sm-6">
    <label>メールアドレス</label>
    <input type="email" class="form-control" name="email" placeholder="メールアドレス">
  </div>
  <div class="form-group col-12">
    <label>パスワードを入力</label>
    <input type="password" class="form-control" name="password" placeholder="パスワード">
  </div>
  <div class="form-group col-12 col-xl-5">
    <div class="form-row">
      <div class="col-12"><label>郵便番号</label></div>
      <div class="col-12"><input type="text" name="zip31"> － <input type="text" name="zip32" onKeyUp="AjaxZip3.zip2addr('zip31','zip32','pref31','addr31','addr31');"></div>
    </div>
  </div>
  <div class="form-group col-12 col-xl-3">
    <label>都道府県</label>
    <input type="text" class="form-control" name="pref31">
  </div>
  <div class="form-group col-12 col-xl-4">
    <label>都道府県以降の住所</label>
    <input type="text" class="form-control" name="addr31">
  </div>
  <button type="submit" class="btn btn-primary">会員登録</button>
</div>
{{ csrf_field() }}
</form>
  
@endsection

@section('scripts')
@endsection
