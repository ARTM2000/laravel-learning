@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <a href="/posts" class="btn btn-secondary mb-2">Back to List</a>
        <h1>{{$post->title}}</h1>
        <small>Written at {{$post->created_at}}</small>
        <hr>
        <p>{{$post->body}}</p>
    </div>
@endsection