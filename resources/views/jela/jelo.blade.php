@extends('layout')

@section('content')
    <h2>{{ $meal->name }}</h2><br>
    <small>{{ $meal->price }} hrk</small>
    <p>{{ $meal->description }} </p>
    <img src="{{asset("storage/". $meal->picture)}}" width="10%" heigh="10%">
    
    <br>
    <a href="{{ route('jela.edit', ['slug' => $meal->id]) }}">Uredi</a>
    <a href="{{ route('jela.destroy', ['slug' => $meal->id])}}">Izbriši</a>
@stop