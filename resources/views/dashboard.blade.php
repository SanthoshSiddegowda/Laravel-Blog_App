@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h5>Welcome!!! {{ Auth::user()->name }}  </h5>
                     <hr><br/>

                   <a href="/posts/create"  class="btn btn-primary">Create Posts</a>

                   @auth
                </div>
@if(count($posts)>0)
                <div class="card-body">
                <h3>  Your Blogs </h3>
                <table class="table table-striped">
                  <tr>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  @foreach ($posts as $post)
                  <tr>
                  <td>{{$post->title}}</td>
                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                  <td>{!! Form::open(['action' => ['postcontroller@destroy',$post->id ],'method' => 'POST', 'class' => '']) !!}
                  {{Form::hidden('_method','DELETE')}}
                  {{Form::submit('Delete',['class'=>'btn btn-danger'])}}</td>
</tr>
@endforeach
@else
<div class="card-body">
<h3>  Your Have No Posts </h3>
</div>
@endif
            </div>
        </div>
    </div>
</div>
</div>
@endauth
@endsection
