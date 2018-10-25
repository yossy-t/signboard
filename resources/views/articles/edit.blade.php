{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.application')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '編集')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
{!!Form::open(['route' => ['articles.update', $article->id ], 'method' => 'patch'])!!}
{!!Form::label('title', 'タイトル')!!}
{!!Form::text('title',"$article->title",['class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control'] )!!}
<div>
@if ($errors->has('title'))
  <span class="invalid-feedback" role="alert">
      {{ $errors->first('title') }}
  </span>
@endif
</div>
<div>
{!!Form::label('body', '内容')!!}
{!!Form::textarea("body","$article->body",['class' => $errors->has('body') ? 'form-control is-invalid' : 'form-control'] )!!}
@if ($errors->has('body'))
<span class="invalid-feedback" role="alert">
    {{ $errors->first('body') }}
</span>
@endif
</div>
{!!Form::submit('更新')!!}
{!!Form::close()!!}
@endsection