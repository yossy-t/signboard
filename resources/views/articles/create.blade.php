{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '新規作成')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
<div>
 {!!Form::open(['url' => 'articles'])!!}
 {!!Form::label('title', 'タイトル')!!}
 {!!Form::text('title',null,['placeholder' => '記事のタイトルを入れる','class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control'])!!}
@if ($errors->has('title'))
    <span class="invalid-feedback" role="alert">
        {{ $errors->first('title') }}
    </span>
@endif
</div>
<div>
 {!!Form::label('body', '内容')!!}
 {!!Form::textarea('body',null,['placeholder' => '記事の内容を入れる','class' =>'form-control'])!!}
 @if ($errors->has('body'))
    <span class="invalid-feedback" role="alert">
        {{ $errors->first('body') }}
    </span>
@endif
</div>
 {!!Form::submit('送信', ['class' => 'btn btn-primary'])!!}
 {!!Form::close()!!}
@endsection