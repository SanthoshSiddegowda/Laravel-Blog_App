@extends('layouts.app')

@section('content')
<main role="main" class="container">
<div class="jumbotron">
    <div class="container">
        <h1>{{$title}} </h1>
        <p>This is the Blog website developed in laravel framework</p>
        <span><a class="btn btn-primary btn-lg" href="/login" role="button">Login &raquo;</a></span>
        <span><a class="btn btn-primary btn-lg" href="/register" role="button">Register &raquo;</a></span>
      </div>
    </div>
    </main>
@endsection
