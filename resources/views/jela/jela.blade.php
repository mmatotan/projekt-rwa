@extends('layout')

@section('content')
    <br>
    <div class="container" style="font-family: 'Times New Roman', serif;">
        @can('edit-author')
            <a href="{{ route('jela.showcreate') }}" class="btn btn-default" role="button">Dodaj novo jelo</a>
        @endcan

        @foreach($meals as $meal)
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-5" style="text-align: center;">
                    <a href={{ "jela/" . $meal->id }}><h3 style=" color: black;">{{ $meal->name }}</h3></a>
                    <p>{{ $meal->price }} HRK</p>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5">
                    @if($meal->picture)
                        <img src="{{asset("storage/". $meal->picture)}}" width="70%" height="50%"><br>
                    @endif
                <br>
                </div>
            </div>
        @endforeach
    </div>
@stop