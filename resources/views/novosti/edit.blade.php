@extends('layout')

@section('content')
<div class="container" style="font-family: 'Times New Roman', serif;">
    <form id="novost" method="POST" action="{{ route('novosti') . '/' . $article->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="form-group">
            <label for="title">Naslov:</label><br>

                <div>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}"
                    class="text @error('title') is-danger @enderror"><br>

                    @error('title')
                        <p class="help is-danger">Molimo vas da unesete naslov!</p>
                    @enderror
                </div>
        </div>
                <div class="form-group">
                    <label for="summary">Sažetak:</label><br>
                    <input type="text" class="form-control" id="summary" name="summary" value="{{ $article->summary }}"
                    class="text @error('summary') is-danger @enderror"><br>
                    
                    @error('summary')
                        <p class="help is-danger">Molimo vas da unesete sažetak!</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="text">Tekst:</label><br>
                    <textarea name="text" class="form-control" id="text" form="novost" value="
                    class="text @error('text') is-danger @enderror">{{ $article->text }}</textarea><br>

                    @error('text')
                        <p class="help is-danger">Molimo vas da unesete tekst!</p>
                    @enderror
                </div>
                <div>
                    <label for="pic">Slika:</label><br>
                    <input type="file" id="pic" name="pic"><br>
                    <p><br>
                        Trenutna slika:<br><img src={{ asset("storage/". $article->picture) }} width="10%" heigh="10%">
                    </p>
                </div>
            
            <input type="submit" value="Uredi">
        </form>
</div>
@endsection