@extends('layouts.template')

@section('title','Editar Filme')

@section('content')
    <div class="form-content">
        <div class="div-form">
            
            <h2 class="title-form">Editar Filme</h2>

            <form class="form-crud" id="form-movie-edit" action="{{ route('movie.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
                
                @csrf
                @method('PUT')

                <label for="input-title">Titulo do filme</label>
                <input class="input-form" id="input-title" value="{{ $movie->title }}" type="text" name="title" placeholder="Titulo" required>
                <label for="input-genre">Gênero</label>
                <input class="input-form" id="input-genre" value="{{ $movie->genre }}"type="text" name="genre" placeholder="Ação / comédia / drama" required>
                <label for="country_id">País</label>
                <select class="input-form" value="{{ $movie->country_id }}" name="country_id" id="country_id">
                    @foreach($countries as $country)
                        <option class="option-country" value="{{ $country->id }}" {{$country->id==$movie->country_id ? 'selected':''}}>{{ $country->name }}</option>
                    @endforeach
                </select>
                <label for="input-release">Lançamento</label>
                <input class="input-form" id="input-release" value="{{ $movie->release }}" type="text" name="release" placeholder="dd/mm/aaaa" required>
                <label for="input-rating">Avaliação</label>
                <input class="input-form" id="input-rating" value="{{ $movie->rating }}"type="text" name="rating" placeholder="9.2" required>
                <label for="textarea-synopsis">Sinopse</label>
                <textarea class="input-form" name="synopsis" id="textarea-synopsis" placeholder="Escreva a sinopse do filme" cols="30" rows="10" required>{{ $movie->synopsis }}</textarea>
                <div class="div-img">
                    <br><input class="input-form" value="storage/{{ $movie->image }}" type="file" name="image" accept="image/*">
                    <br><img src="/storage/{{ $movie->image }}" alt="poster do filme {{$movie->title}}">
                </div>
                <button class="form-button" type="submit">Editar Filme</button>
                <a class="form-button" href="{{ route('movie.index') }}">Voltar</a>
                
            </form>
            
        </div>
    </div>

@endsection