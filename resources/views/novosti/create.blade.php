@extends('layout')

@section('content')
<div class="container" style="font-family: 'Times New Roman', serif;">
    <form id="novost" method="POST" action="{{ route('novosti.create') }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
            <label for="title">Naslov:</label><br>

                <div>
                    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"
                    class="text @error('title') is-danger @enderror"><br>

                    @error('title')
                        <p class="help is-danger">Molimo vas da unesete naslov!</p>
                    @enderror
                </div>
            </div>
                <div class="form-group">
                    <label for="summary">Sažetak:</label><br>
                    <input type="text" class="form-control" id="summary" name="summary" value="{{ old('summary') }}"
                    class="text @error('summary') is-danger @enderror"><br>
                    
                    @error('summary')
                        <p class="help is-danger">Molimo vas da unesete sažetak!</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="text">Tekst:</label><br>
                    <textarea name="text" class="form-control" id="text" form="novost" value="{{ old('text') }}"
                    class="text @error('text') is-danger @enderror"></textarea><br>

                    @error('text')
                        <p class="help is-danger">Molimo vas da unesete tekst!</p>
                    @enderror
                </div>
            <label for="pic">Slika:</label><br>
            <input type="file" id="pic" name="pic"><br><br>
            
            <input type="submit" value="Objavi">
        </form>
</div>
@endsection