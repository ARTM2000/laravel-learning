@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <a href="/posts" class="btn btn-secondary mb-2">Back to List</a>
        <h1>{{$post->title}}</h1>
        <small>Written at {{$post->created_at}}</small>
        <hr>
        <p>{{$post->body}}</p>
        <hr>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-primary">Edit</a>
        {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
            {!! Form::hidden('_method', 'DELETE') !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-outline-danger']) !!}
        {!! Form::close() !!}
    </div>
@endsection