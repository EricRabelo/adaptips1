<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies | Adpti</title>
</head>
<body>
    <div>
        @foreach ($movies as $movie)
            <h2> Titulo: {{ $movie->title }}</h2>
            <h4> - Gênero: {{ $movie->genre }}</h4>
            <h4> - Sinopse: {{ $movie->synopsis }}</h4>
            <h4> - Avaliação: {{ $movie->rating }}</h4>
            <h4> - País: {{ $movie->country->name }}</h4>
            <br>
        @endforeach
    </div>
    
</body>
</html>