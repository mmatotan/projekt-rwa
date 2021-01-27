@extends('layout')

@section('content')
    <br>
    <div class="container" style="font-family: 'Times New Roman', serif;">
        @can('edit-author')
            <a href="{{ route('novosti.showcreate') }}" class="btn btn-default" role="button">Dodaj novu novost</a>
        @endcan

        @foreach($articles as $article)
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-5" style="text-align: center;">
                    <a href={{ "novosti/" . $article->id }}><h3 style="color: black">{{ $article->title }}</h3></a>
                    <p style="color: black">{{ $article->summary }}</p>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5">
                    @if($article->picture)
                       <img src="{{asset("storage/". $article->picture)}}" width="70%" height="50%"><br>
                    @endif
                    <br>
                </div>
            </div>
            <br>
        @endforeach
    </div>
@stop