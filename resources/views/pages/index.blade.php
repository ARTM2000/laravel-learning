@extends('layout.app')

@section('content')
<div class="jumbotron jumbotron-fluid text-center bg-primary text-light">
    <h1>{{$title}}</h1>
    <p>{{$info}}</p>
    <button class="btn btn-warning">Login</button>
    <button class="btn btn-success">Register</button>
</div>
@endsection
    