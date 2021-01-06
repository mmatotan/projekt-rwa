@extends('layout')

@section('content')
    <h2>{{ $article->title }}</h2><br>
    <small>{{ $article->created_at }}</small>
    <p>{{ $article->text }} </p>
    <img src="{{asset("storage/". $article->picture)}}" width="10%" heigh="10%">
@stop