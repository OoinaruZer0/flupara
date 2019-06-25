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
  <div class="container-fluid">
    <div class="row">
      @if($errors->any())
      <div class="col-12 alert alert-danger">
        <ul>
          @foreach($errors->all() as $message)
          <li>{{ $message }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <div class="col-12">
        <form action="{{ route('users.signup') }}" method="post">
          <div class="form-group">
            <label>氏名</label>
            <input type="text" class="form-control" name="lastname" placeholder="苗字">
            <input type="text" class="form-control" name="firstname" placeholder="名前">
          </div>
          <div class="form-group">
            <label>ふりがな</label>
            <input type="text" class="form-control" name="lastname_kana" placeholder="苗字">
            <input type="text" class="form-control" name="firstname_kana" placeholder="名前">
          </div>
          <div class="form-group">
            <label>電話番号</label>
            <input type="tel" class="form-control" name="phone" placeholder="電話番号">
          </div>
          <div class="form-group">
            <label>メールアドレス</label>
            <input type="email" class="form-control" name="email" placeholder="メールアドレス">
          </div>
          <div class="form-group">
            <label>パスワードを入力</label>
            <input type="password" class="form-control" name="password" placeholder="パスワード">
          </div>
          <div class="form-group">
          <label>郵便番号</label>
          <input type="text" name="zip31" size="4" maxlength="3"> － <input type="text" name="zip32" size="5" maxlength="4" onKeyUp="AjaxZip3.zip2addr('zip31','zip32','pref31','addr31','addr31');">
          <label>都道府県</label>
          <input type="text" name="pref31" size="20">
          <label>都道府県以降の住所</label>
          <input type="text" name="addr31" size="40">
          </div>
          <button type="submit" class="btn btn-primary">会員登録</button>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
@endsection
