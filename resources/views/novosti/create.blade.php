@extends('layout')

@section('content')
    <form id="novost" method="POST" action="/novosti/create" enctype="multipart/form-data">
        @csrf
        <label for="title">Naslov:</label><br>

            <div>
                <input type="text" id="title" name="title" value="{{ old('title') }}"
                class="text @error('title') is-danger @enderror"><br>

                @error('title')
                    <p class="help is-danger">Molimo vas da unesete naslov!</p>
                @enderror
            </div>

            <div>
                <label for="summary">Sažetak:</label><br>
                <input type="text" id="summary" name="summary" value="{{ old('summary') }}"
                class="text @error('summary') is-danger @enderror"><br>
                
                @error('summary')
                    <p class="help is-danger">Molimo vas da unesete sažetak!</p>
                @enderror
            </div>
            <div>
                <label for="text">Tekst:</label><br>
                <textarea name="text" id="text" form="novost" value="{{ old('text') }}"
                class="text @error('text') is-danger @enderror"></textarea><br>

                @error('text')
                    <p class="help is-danger">Molimo vas da unesete tekst!</p>
                @enderror
            </div>
        <label for="pic">Slika:</label><br>
        <input type="file" id="pic" name="pic"><br>
        
        <input type="submit" value="Objavi">
    </form>
@endsection