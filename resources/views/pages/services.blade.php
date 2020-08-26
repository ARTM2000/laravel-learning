@extends('layout.app')

@section('content')
    <div class="jumbotron jumbotron-fluid text-center bg-primary text-light">
        <h1>{{$data['title']}}</h1>
        <p>have fun :)</p>
    </div>
    @if (count($data['services']) > 0)
        <div class="container">
            <ul class="list-group">
                @foreach ($data['services'] as $service)
                    <li class="list-group-item">{{$service}}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
    