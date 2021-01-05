@extends('layout')

@section('content')
    <br><button onclick="location.href = '/novosti/create';">Dodaj novu novost</button>
    
    @foreach($articles as $article)
        <a href={{ "novosti/" . $article->slug }}><h3>{{ $article->title }}</h3></a>
        <p>{{ $article->summary }}</p>
    @endforeach
@stop