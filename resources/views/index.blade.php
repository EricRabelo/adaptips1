@extends('layouts.template')

@section('title', 'AdaptiPS | Filmes')

@section('content')

    <center><h1>Catálogo de Filmes do AdaptiPS</h1></center>
    
    <form class="form-search" action={{route('movie.index')}} method="GET">
        <input class = "input-search" type="text" name="search" placeholder="Procure por um filme">
        <button class = "button-search" type="submit">Pesquisar</button>
    </form>

    <hr>

    <div class="div-verification">

        @if(count($movies)!=0)

            @if($search)
                <h2 class="title-search">Buscando por filmes que contenham: {{$search}}</h2>
            @endif

            @foreach ($movies as $movie)
                <div class="card-movie">
                    <h3>{{ $movie->title }}</h3>
                    <div class="buttons-container">
                        <a class="button-edit-movie-content" href="{{ route('movie.edit', $movie->id) }}">Editar</a>
                        
                        <form class="form-button-delete-movie" action="{{ route('movie.destroy', $movie->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="button-delete-movie"type="submit">Excluir</button>
                        </form> 
                    </div>

                    <img class="image-movie-content" src="/storage/{{ $movie->image }}" alt="Imagem" width="80" height="100"/>

                    <div class="info-container">
                        <p class="specify genre">{{ $movie->genre }}</p>
                        <p class="specify country"><strong>País:</strong> {{ $movie->country->name }}</p>
                        <p class="specify release"><strong>Lançamento:</strong> {{ $movie->release }}</p>
                        <p class="specify rating"><strong>Nota:</strong> {{ $movie->rating }}</p>
                        <p class="specify synopsis"><strong>Sinopse:</strong> {{ $movie->synopsis }}</p>
                    </div>
                </div>
                
            @endforeach
        @else
            @if($search)
                <p class="p-search-result">Não foi possivel encontrar nenhum filme com: {{$search}}! <br><a class="link-home" href={{route('movie.index')}}>Exibir todos</a></p>
            @else
                <p class="p-movie-not-found">Não há filmes cadastrados</p>
            @endif  

        @endif

    </div>

@endsection