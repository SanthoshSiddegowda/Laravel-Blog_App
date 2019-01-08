@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>

<ul class="list-group">
@if(count($service)>0)
@foreach($service as $services)
<li class="list-group-item">{{$services}}</li>
@endforeach
@endif
</ul>
@endsection
