@extends('layout')

@section('content')

    <form id="shop" method="POST" action="{{ route('webshop.order') }}">
        @csrf
        @foreach($meals as $meal)
        <label for={{ "quant" . $meal->id }}>{{ $meal->name }}</label>
        <input id="{{ "quant" . $meal->id }}" name="{{ "quant" . $meal->id }}" type="number" value=0>
        <br>
        @endforeach
        <label for="adresa">Adresa: </label>
        <input type="text" id="adresa" name="adresa"> <br>
        <input type="submit" value="Naruči">
    </form>

@endsection