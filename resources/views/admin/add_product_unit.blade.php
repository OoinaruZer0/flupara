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
    <h1>単位追加画面</h1>
     <form action="{{ route('product.unit') }}" method="post">
                <div class="form-group">
                    <input type="text" name="name" placeholder="単位"> 
                </div>
                <button type="submit" class="btn btn-primary">単位追加</button>
                {{ csrf_field() }}
</form>
@endsection

