@extends('layout')

@section('content')
    <h2>{{ $title }}</h2><br>
    <small>{{ $writtenOn }}</small>
    <p>{{ $paragraph }} </p>
    <img src= {{ $picture }}>
@stop