@extends('layout')

@section('content')
    <br>
    <a href="{{ route('novosti.showcreate') }}">Dodaj novu novost</a>
    
    @foreach($articles as $article)
        <a href={{ "novosti/" . $article->id }}><h3>{{ $article->title }}</h3></a>
        <p>{{ $article->summary }}</p>
    @endforeach
@stop