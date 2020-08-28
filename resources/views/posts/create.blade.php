@extends('layout.app')

@section('content')
    <div class="container my-3">
        <h1>Create new post</h1>
        {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Content')}}
                {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Post content'])}}
            </div>
            {{Form::submit('Publish', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection