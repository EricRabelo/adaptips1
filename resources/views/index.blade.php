@extends('layouts.template')

@section('title', 'AdaptiPS | Filmes')

@section('content')
    @section('search-bar')
        <div class="cabecalho">
            <form class="form-search" action={{route('movie.index')}} method="GET">
                <input type="text" name="search" placeholder="Procure por um filme">
                <button type="submit"><img src="/icons/pesquisa-de-lupa.png" alt=""></button>
            </form>
        </div>
    @endsection

        <div class="div-logo">
            <a class="logo"><strong>Catálogo de Filmes do AdaptiPS</strong></a>
        </div>
            
        @if(count($movies)!=0)
            @if($search)
                <h2 class="index-msg">Buscando por filmes que contenham: {{$search}}</h2>
            @endif
            <div class="all-cards">
                @foreach ($movies as $movie)
                    <div class="card-movie">
                        <div class="topCard">
                            <h2 class="title">{{$movie->title}}</h2>
                        </div>
                        <div class="mediaCard">
                            <img src="/storage/{{ $movie->image }}" alt="Imagem" width="80" height="100"/>
                        </div>
                        <div class="buttons-container">
                            <a class="form-button" href="{{ route('movie.edit', $movie->id) }}">Editar</a>
                            
                            <form action="{{ route('movie.destroy', $movie->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="form-button" type="submit">Excluir</button>
                            </form> 
                        </div>
                        <div class="info-container">
                            <p class="specify-rating"><img src="https://image.flaticon.com/icons/png/512/1828/1828884.png" width="20" height="20" alt="Nota:"/>   <strong>{{ $movie->rating }}</strong></p>
                            <p class="specify genre"><strong>Gênero:</strong> {{ $movie->genre }}</p>
                            <p class="specify country"><strong>País:</strong> {{ $movie->country->name }}</p>
                            <p class="specify release"><strong>Lançamento:</strong> {{ $movie->release }}</p>
                            <p class="specify synopsis"><strong>Sinopse:</strong> {{ $movie->synopsis }}</p>
                            
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            @if($search)
                <p class="index-msg">Não foi possivel encontrar nenhum filme com: {{$search}} <br><br><a class="link-home" href={{route('movie.index')}}>Exibir todos</a></p>
            @else
                <p class="index-msg">Não há filmes cadastrados</p>
            @endif  

        @endif




@endsection