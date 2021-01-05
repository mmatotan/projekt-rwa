@extends('layout')

@section('content')
    <h2>{{ $name }}</h2><br>
    <small>{{ $price}}</small>
    <p>{{ $description }} </p>
    <img src= "{{ $picture }}">
@stop