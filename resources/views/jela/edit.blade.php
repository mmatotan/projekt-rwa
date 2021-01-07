@extends('layout')

@section('content')
<form id="jelo" method="POST" action="{{ route('jela') . '/' . $meal->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Ime:</label><br>

            <div>
                <input type="text" id="name" name="name" value="{{ $meal->name }}"
                class="text @error('name') is-danger @enderror"><br>

                @error('name')
                    <p class="help is-danger">Molimo vas da unesete ime jela!</p>
                @enderror
            </div>

            <div>
                <label for="price">Cijena:</label><br>
                <input type="text" id="price" name="price" value="{{ $meal->price }}"
                class="text @error('price') is-danger @enderror"><br>
                
                @error('price')
                    <p class="help is-danger">Molimo vas da unesete cijenu jela!</p>
                @enderror
            </div>
            <div>
                <label for="description">Tekst:</label><br>
                <textarea name="description" id="description" form="jelo" value="
                class="text @error('description') is-danger @enderror">{{ $meal->description }}</textarea><br>

                @error('description')
                    <p class="help is-danger">Molimo vas da unesete opis jela!</p>
                @enderror
            </div>
            <div>
                <label for="pic">Slika:</label><br>
                <input type="file" id="pic" name="pic" value="{{ $meal->picture }}"><br>
                <p>
                    Trenutna slika:<br><img src={{ asset("storage/". $meal->picture) }} width="10%" heigh="10%">
                </p>
            </div>
        
        <input type="submit" value="Uredi">
    </form>
@endsection