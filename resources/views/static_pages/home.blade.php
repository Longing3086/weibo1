@extends('layouts.default')

@section('title', '主页')
@section('content')
    <div class="jumbotron">
        <h1>hello laravel</h1>
        <p class="lead">
            你现在看到的是一个简单的应用
        </p>
        <p>一切都从这里开始</p>
        <p>
            <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">现在注册</a>
        </p>
    </div>
@endsection
