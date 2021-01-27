@extends('layout')

@section('content')
<div class="container" style="font-family: 'Times New Roman', serif;">
    <form id="jelo" method="POST" action="{{ route('jela') . '/' . $meal->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="form-group">
            <label for="name" class="label">Ime:</label><br>

                <div>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $meal->name }}"
                    class="text @error('name') is-danger @enderror"><br>

                    @error('name')
                        <p class="help is-danger">Molimo vas da unesete ime jela!</p>
                    @enderror
                </div>
        </div>
                <div class="form-group">
                    <label for="price">Cijena:</label><br>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $meal->price }}"
                    class="text @error('price') is-danger @enderror"><br>
                    
                    @error('price')
                        <p class="help is-danger">Molimo vas da unesete cijenu jela!</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Tekst:</label><br>
                    <textarea name="description" class="form-control" id="description" form="jelo" value="
                    class="text @error('description') is-danger @enderror">{{ $meal->description }}</textarea><br>

                    @error('description')
                        <p class="help is-danger">Molimo vas da unesete opis jela!</p>
                    @enderror
                </div>
                <div>
                    <label for="pic">Slika:</label><br>
                    <input type="file" id="pic" name="pic" value="{{ $meal->picture }}"><br>
                    <p><br>
                        Trenutna slika:<br><img src={{ asset("storage/". $meal->picture) }} width="10%" heigh="10%">
                    </p>
                </div>
            
            <input type="submit" value="Uredi">
        </form>
</div>
@endsection