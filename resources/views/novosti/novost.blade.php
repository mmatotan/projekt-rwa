@extends('layout')

@section('content')
<div class="row" style="font-family: 'Times New Roman', serif; font-size: 30px;">
    <div class="col-md-5 col-sm-5 col-xs-5">
        <h2 class="text-center" style="font-size: 49px">{{ $article->title }}</h2><br>
        <div class="container">
            <small>{{ $article->created_at }}</small>
            <p>{{ $article->text }} </p>
        </div>
    </div>
    <div class="col-md-7 col-sm-7 col-xs-7">
        @if($article->picture)
            <img src="{{asset("storage/". $article->picture)}}" width="109%" heigh="75%">
        @endif
    </div>
</div>
    @can('edit-author')
        <a href="{{ route('novosti.edit', ['slug' => $article->id]) }}" class="btn btn-default" style="background-color: cadetblue; color:black">Uredi</a>
        <a href="{{ route('novosti.destroy', ['slug' => $article->id])}}" class="btn btn-default" style="background-color: cadetblue; color:black">Izbriši</a>
    @endcan
@stop