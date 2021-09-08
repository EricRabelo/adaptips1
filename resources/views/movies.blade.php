<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies | Adapti</title>
</head>
<body>
    <a href="{{ route('movie.create') }}"><button>Criar</button></a>
    <br><br>
    <form action={{route('movie.index')}} method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procure por um filme">
        <a><button type="submit">Pesquisar</button></a>
    </form>
    @if($search)
        <h2>Buscando por filmes que contenham: {{$search}}</h2>
    @else
        <h2>Catálogo de Filmes do AdaptiPS:</h2>
    @endif
    @if(count($movies)==0 && $search)
        <p>Não foi possivel encontrar nenhum filme com: {{$search}}! <a href={{route('movie.index')}}>Exibir todos</p>
    @elseif(count($movies)==0)
        <p>Não há filmes cadastrados</p>
    @elseif (count($movies)!=0)
    @foreach ($movies as $movie)
        <div style="background-color: #add8e6">
            <h2> Titulo: {{ $movie->title }}</h2>
            <h4> - Gênero: {{ $movie->genre }}</h4>
            <h4> - Sinopse: {{ $movie->synopsis }}</h4>
            <h4> - Avaliação: {{ $movie->rating }}</h4>
            <h4> - País: {{ $movie->country->name }}</h4>
            <img src="storage/{{ $movie->image }}" alt="Imagem" width="80" height="100"/>
            <a href="{{ route('movie.edit', $movie->id) }}">Editar</a>
            <form action="{{ route('movie.destroy', $movie->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form> 
        </div>
    @endforeach
        @if($search)
            <br><a href={{route('movie.index')}}>Exibir todos</p>
        @endif
    @endif
</body>
</html>