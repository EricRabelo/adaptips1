<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>
    <nav class = "nav-container" style="background-color: #a3d145">
        @yield('nav-content')
        <h1 class="title">Eric Rabelo</h1>
        <div class="buttons-nav" align="right">
            <a class="link-home" href="{{route('movie.index')}}">Inicio</a>
            <a class="create-movie-button" href="{{ route('movie.create') }}"><button>Adicionar Filme</button></a>
        </div>
    </nav>

    <div class = "container">
        @yield('content')
    </div>

    <footer class="footer-container" style="background-color: #a3d145">
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