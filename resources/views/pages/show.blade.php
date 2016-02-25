@extends('_layouts.rose')
@section('title', 'Page Title')

@section('content')
  <h4>
    <a href="/">⬅️返回首页</a>
  </h4>

  <h1 style="text-align: center; margin-top: 50px;">{{ $page->title }}</h1>
  <div id="date" style="text-align: center;">
    {{ $page->updated_at->format('Y-m-d H:s') }}
  </div>
  <hr>
  <div id="content" style="padding: 50px;">
    <p>
      {{ $page->body }}
    </p>
  </div>
@endsection