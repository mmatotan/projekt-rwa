@extends('layout')

@section('content')
    <h2>{{ $name }}</h2><br>
    <small>{{ $price}}</small>
    <p>{{ $description }} </p>
    <img src="{{asset("storage/". $picture)}}" width="10%" heigh="10%">
    <a href="{{ route('jelo.destroy', ['slug' => $id])}}">Izbriši</a>
@stop