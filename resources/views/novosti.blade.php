@extends('layout')

@section('content')
    @foreach($articles as $article)
    <?php $article_link = "/novosti/" . strtolower(str_replace(" ", "-", $article->title)); ?>
    <a href={{ $article_link }}><h3>{{ $article->title }}</h3></a>
    <?php $picture = "img/" . $article->picture?>
    <p>{{ $article->summary }}</p>

    @endforeach
@stop