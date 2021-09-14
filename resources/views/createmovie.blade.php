@extends('layouts.template')

@section('title','Adicionar Filme')

@section('content')

    <form class="form-movie-create" id="form-movie-create" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        
        @csrf

        <label for="input-title">Titulo do filme</label>
        <input class="input-form" id="input-title" type="text" name="title" placeholder="Titulo" required>
        <label for="input-genre">Gênero</label>
        <input class="input-form" id="input-genre" type="text" name="genre" placeholder="Ação / comédia / drama" required>
        <label for="input-release">Lançamento</label>
        <input class="input-form" id="input-release" type="date" name="release" required>
        <label for="textarea-synopsis">Sinopse</label>
        <textarea class="input-form" name="synopsis" id="textarea-synopsis" placeholder="Escreva a sinopse do filme" cols="30" rows="10" required></textarea>
        <label for="input-rating">Avaliação</label>
        <input class="input-form" id="input-rating" type="text" name="rating" placeholder="9.2" required>
        <label for="country_id">País</label>
        <select class="input-form" name="country_id" id="country_id" required>>
            <option value="" disabled selected>-- Escolha um país --</option>
            @foreach($countries as $country)
                <option class="input-form" value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>

        <input class="input-form" id="input-image" type="file" name="image" accept="image/*" required>
        <button class="button-form" type="submit">Salvar Filme</button>
        <a class="button-home" href="{{ route('movie.index') }}">Voltar</a>

    </form>
    
    
@endsection