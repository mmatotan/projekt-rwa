@extends('layout')

@section('content')

        <form id="jelo" method="POST" action="{{ route('jela.create') }}" enctype="multipart/form-data">
        @csrf
        <label for="name">Ime:</label><br>

            <div>
                <input type="text" id="name" name="name" value="{{ old('name') }}"
                class="text @error('name') is-danger @enderror"><br>

                @error('name')
                    <p class="help is-danger">Molimo vas da unesete ime jela!</p>
                @enderror
            </div>

            <div>
                <label for="price">Cijena:</label><br>
                <input type="number" step="0.01" id="price" name="price" value="{{ old('price') }}"
                class="input @error('price') is-danger @enderror"><br>
                
                @error('price')
                    <p class="help is-danger">Molimo vas da unesete cijenu jela!</p>
                @enderror
            </div>
            <div>
                <label for="description">Opis:</label><br>
                <textarea name="description" id="description" form="jelo" value="{{ old('description') }}"
                class="text @error('description') is-danger @enderror"></textarea><br>

                @error('description')
                    <p class="help is-danger">Molimo vas da unesete opis jela!</p>
                @enderror
            </div>
        <label for="pic">Slika:</label><br>
        <input type="file" id="pic" name="pic"><br>
        
        <input type="submit" value="Objavi">
    </form>

@endsection