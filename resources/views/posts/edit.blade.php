@extends('layout.app')

@section('content')
    <div class="container my-3">
        <h1>Edit post</h1>
        {!! Form::open(['action' => ['PostController@update', $post->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Content')}}
                {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Post content'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Save', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection