@extends ('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go back </a>
<h1>{{$post->title}}</h1>
<small>created on {{$post->created_at}}</small>
<hr>
<div class="card">
 {!!$post->body!!}
</div>



@auth
@if(Auth::user()->id == $post->user_id)
 <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
{!! Form::open(['action' => ['postcontroller@destroy',$post->id ],'method' => 'POST', 'class' => 'float-right']) !!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
@endif
@endauth
@endsection
