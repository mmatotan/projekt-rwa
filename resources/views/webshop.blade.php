@extends('layout')

@section('content')
    <div class="container text-center"  style="font-family: 'Times New Roman', serif;">
        @auth
        <div class="form-group">
            <form id="shop" method="POST" action="{{ route('webshop.order') }}">
                @csrf
                @foreach($meals as $meal)
                <label for={{ "quant" . $meal->id }}>{{ $meal->name }}</label>
                <input id="{{ "quant" . $meal->id }}" name="{{ "quant" . $meal->id }}" type="number" placeholder="Količina">
                <br><br>
                @endforeach
                <label for="adresa">Adresa: </label>
                <input type="text" id="adresa" name="adresa"> <br><br>
                <input type="submit" value="Naruči">
            </form>
        </div>
        @endauth
    </div>
@endsection