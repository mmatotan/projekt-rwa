@extends('layout')

@section('content')
    <div class="container" style="font-family: 'Times New Roman', serif;">
        <form id="jelo" method="POST" action="{{ route('jela.create') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Ime:</label><br>

                <div>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                    class="text @error('name') is-danger @enderror"><br>

                    @error('name')
                        <p class="help is-danger">Molimo vas da unesete ime jela!</p>
                    @enderror
                </div>
        </div>

            <div class="form-group">
                <label for="price">Cijena:</label><br>
                <input type="number" class="form-control" step="0.01" id="price" name="price" value="{{ old('price') }}"
                class="input @error('price') is-danger @enderror"><br>
                
                @error('price')
                    <p class="help is-danger">Molimo vas da unesete cijenu jela!</p>
                @enderror
            </div>
            <div class="form-group">
                    <label for="description">Opis:</label><br>
                    <textarea name="description" class="form-control" id="description" form="jelo" value="{{ old('description') }}"
                    class="text @error('description') is-danger @enderror"></textarea><br>

                    @error('description')
                        <p class="help is-danger">Molimo vas da unesete opis jela!</p>
                    @enderror
                </div>
            <label for="pic">Slika:</label><br>
            <input type="file" id="pic" name="pic"><br><br>
            
            <input type="submit" value="Objavi">
        </form>
    </div>
@endsection