<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&family=Xanh+Mono&display=swap" rel="stylesheet">

    <style>
        *{
            font-family: 'Xanh Mono', monospace;
        }
    </style>
</head>

<body>
    <header class="header-container">
        <h6 class="title">Adapti Filmes</h6>
        <nav class = "nav-container">
            <ul class="nav-items">
                <li><a class="link-home" href="{{route('movie.index')}}">Inicio</a></li>
                <li><a class="create-movie-button" href="{{ route('movie.create') }}">Adicionar Filmes</a></li>
            </ul>
        </nav>
    </header>

    <main class = "main-container">
        @yield('content')
    </main>

    <footer class="footer-container">
        @yield('footer-content')
        <h1 class="title">Desenvolvido com ❤ 2021 Adapti-Soluções Web</h1>
        <div class="adpti-links" align="right">
            <a class="facebook-link" href="https://www.facebook.com/AdaptiEmpresaJr">Facebook</a>
            <a class="instagram-link" href="https://www.instagram.com/adaptiempresajr/">Instagram</a>
            <a class="linkedin-link" href="https://www.linkedin.com/company/adaptiempresajr/">Linkedin</a>
        </div>
    </footer>
</body>
</html>