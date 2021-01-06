@extends('layout')

@section('content')
    <br>
    <a href="{{ route('jela.showcreate') }}">Dodaj novo jelo</a>
    
    @foreach($meals as $meal)
        <a href={{ "jela/" . $meal->slug }}><h3>{{ $meal->name }}</h3></a>
        <p>{{ $meal->price }}</p>
    @endforeach
@stop