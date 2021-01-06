@extends('layout')

@section('content')
<form id="novost" method="POST" action="{{ route('novosti') . '/' . $article->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="title">Naslov:</label><br>

            <div>
                <input type="text" id="title" name="title" value="{{ $article->title }}"
                class="text @error('title') is-danger @enderror"><br>

                @error('title')
                    <p class="help is-danger">Molimo vas da unesete naslov!</p>
                @enderror
            </div>

            <div>
                <label for="summary">Sažetak:</label><br>
                <input type="text" id="summary" name="summary" value="{{ $article->summary }}"
                class="text @error('summary') is-danger @enderror"><br>
                
                @error('summary')
                    <p class="help is-danger">Molimo vas da unesete sažetak!</p>
                @enderror
            </div>
            <div>
                <label for="text">Tekst:</label><br>
                <textarea name="text" id="text" form="novost" value="
                class="text @error('text') is-danger @enderror">{{ $article->text }}</textarea><br>

                @error('text')
                    <p class="help is-danger">Molimo vas da unesete tekst!</p>
                @enderror
            </div>
        <label for="pic">Slika:</label><br>
        <input type="file" id="pic" name="pic" value="{{ $article->picture }}"><br>
        
        <input type="submit" value="Objavi">
    </form>
@endsection