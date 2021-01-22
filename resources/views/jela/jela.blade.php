@extends('layout')

@section('content')
    <br>
    @can('edit-author')
        <a href="{{ route('jela.showcreate') }}">Dodaj novo jelo</a>
    @endcan

    @foreach($meals as $meal)
        <a href={{ "jela/" . $meal->id }}><h3>{{ $meal->name }}</h3></a>
        <p>{{ $meal->price }}</p>
    @endforeach
@stop