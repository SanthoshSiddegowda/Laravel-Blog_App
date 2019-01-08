@extends ('layouts.app')

@section('content')
<h1>Create  Posts</h1>

{!! Form::open(['action' => 'postcontroller@store', 'method' => 'POST','enctype=>multipart/data' 'class' => 'form']) !!}
    <div class="form-group">
      {{Form::label('title','Title')}}
      {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
    </div>

    <div class="form-group">
      {{Form::file('cover_image')}}

    </div>

    <div class="form-group">
      {{Form::label('body','Body')}}
      {{Form::textarea('body','',['id'=>'hello','class'=>'form-control','placeholder'=>'write the message!!'])}}
    </div>


    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}

@endsection
