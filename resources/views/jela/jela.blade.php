@extends('layout')

@section('content')
    <br><button onclick="location.href = '/jela/create';">Dodaj novo jelo</button>
    @foreach($meals as $meal)
        <a href={{ "jela/" . $meal->slug }}><h3>{{ $meal->name }}</h3></a>
        <p>{{ $meal->price }}</p>
    @endforeach
@stop