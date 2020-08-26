@extends('layout.app')

@section('content')
    <div class="container mt-3">
        <h1>Posts</h1>
        @if (count($data) > 0)
            @foreach ($data as $post)
                <div class="card mt-3" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
                        <p class="card-text">{{$post->body}}</p>
                    </div>
                </div>                
            @endforeach
            {{$data->links()}}
        @else 
            <h2 class="text-align-center">There is a problem in showing posts, Try again</h2>
        @endif
    </div>
@endsection