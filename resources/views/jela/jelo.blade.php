@extends('layout')

@section('content')
    <div class="row" style="font-family: 'Times New Roman', serif; font-size: 30px;">
        <div class="col-md-5 col-sm-5 col-xs-5">
            <h2 class="text-center" style="font-size: 49px">{{ $meal->name }}</h2><br>
            <div class="alert alert-default" role="alert" style="text-align: center; background-color: lightgray">Cijena: <small>{{ $meal->price }} HRK</small></div>
            <div class="container">
                <p>{{ $meal->description }} </p>
            </div>
        </div>
        <div  class="col-md-7 col-sm-7 col-xs-7">
            @if($meal->picture)
                <img src="{{asset("storage/". $meal->picture)}}" width="100%" height="75%">
            @endif
        </div>
    </div>
        @can('edit-author')
            <a href="{{ route('jela.edit', ['slug' => $meal->id]) }}" class="btn btn-default" style="background-color: cadetblue; color:black">Uredi</a>
            <a href="{{ route('jela.destroy', ['slug' => $meal->id])}}" class="btn btn-default" style="background-color: cadetblue; color:black">Izbriši</a>
        @endcan
@stop