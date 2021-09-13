@extends('templates')

@section('title', 'Adapti | Filmes')

@section('content')

    <center><h1>Catálogo de Filmes do AdaptiPS</h1></center>

    <div class="search-content">
        <form action={{route('movie.index')}} method="GET">
            <input class = "search-input" type="text" name="search" placeholder="Procure por um filme">
            <button class = "search-button" type="submit">Pesquisar</button>
        </form>
    </div>

    <hr>

    <div class="verification">

        @if(count($movies)!=0)

            @if($search)
                <h2 class="title-search">Buscando por filmes que contenham: {{$search}}</h2>
            @endif

            @foreach ($movies as $movie)
                <div class="movie-content">
                    <p class="p-movie-content"> Titulo: {{ $movie->title }}</p>
                    <p class="p-movie-content"> - Gênero: {{ $movie->genre }}</p>
                    <p class="p-movie-content"> - Sinopse: {{ $movie->synopsis }}</p>
                    <p class="p-movie-content"> - Avaliação: {{ $movie->rating }}</p>
                    <p class="p-movie-content"> - País: {{ $movie->country->name }}</p>
                    <img class="image-movie-content" src="storage/{{ $movie->image }}" alt="Imagem" width="80" height="100"/>
                    
                    <a class="button-edit-movie-content" href="{{ route('movie.edit', $movie->id) }}">Editar</a>
                    
                    <form class="form-button-delete-movie" action="{{ route('movie.destroy', $movie->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="button-delete-movie"type="submit">Excluir</button>
                    </form> 

                    <hr>
                </div>
            @endforeach

                @if($search)
                    <br>
                    <a class="link-home" href={{route('movie.index')}}>Exibir todos</a>
                @endif
        @else

            @if($search)
                <p class="p-search-result">Não foi possivel encontrar nenhum filme com: {{$search}}! <br><a class="link-home" href={{route('movie.index')}}>Exibir todos</a></p>
            @else
                <p class="p-movie-not-found">Não há filmes cadastrados</p>
            @endif  

        @endif

    </div>

@endsection