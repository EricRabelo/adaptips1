@extends('templates')

@section('title','Adicionar Filme')

@section('content')

    <form class="form-movie-create" id="form-movie-create" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        
        @csrf

        <br><br>
        <label for="input-title">Titulo do filme</label>
        <input class="input-movie" id="input-title" type="text" name="title" placeholder="Titulo" required>
        
        <br><br>
        <label for="input-genre">Gênero</label>
        <input class="input-movie" id="input-genre" type="text" name="genre" placeholder="Ação / comédia / drama" required>
        
        <br><br>
        <label for="country_id">País</label>
        <select class="select-county" name="country_id" id="country_id" required>>
            @foreach($countries as $country)
                <option class="option-country" value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        
        <br><br>
        <label for="input-release">Lançamento</label>
        <input class="input-movie" id="input-release" type="text" name="release" placeholder="dd/mm/aaaa" required>
        
        <br><br>
        <label for="input-rating">Avaliação</label>
        <input class="input-movie" id="input-rating" type="text" name="rating" placeholder="9.2" required>
        
        <br><br>
        <label for="textarea-synopsis">Sinopse</label>
        <textarea class="textarea-movie" name="synopsis" id="textarea-synopsis" placeholder="Escreva a sinopse do filme" cols="30" rows="10"></textarea>
        
        <br><br>
        <input class="input-movie" id="input-image" type="file" name="image" accept="image/*" required>
        
        <br><br>
        <button class="button-movie" type="submit">Salvar Filme</button>

    </form>
    
    <a class="button-home" href="{{ route('movie.index') }}"><button>Voltar</button></a>
    
@endsection