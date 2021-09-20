<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="/css/template.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/form-crud.css">
    <title>@yield('title')</title>
</head>

<body>
    <header class="header-container">
        <nav class = "nav-container">
            <div class="nav-logo">
                <a href="{{route('movie.index')}}"><img src="/icons/logo-adapti.png" alt=""></a>
                <a class="logo" href="{{route('movie.index')}}">Adapti Filmes</a>    
                </div>
            <ul class="nav-list">
                <li><a class="link" href="{{route('movie.index')}}"><i class="fas fa-home"></i> Inicio</a></li>
                <li><a class="link" href="{{ route('movie.create') }}"><i class="fas fa-plus"></i> Adicionar Filmes</a></li>
            </ul>
        </nav>
        @yield('search-bar')
    </header>

    <main class = "main-container">
        @yield('content')
    </main>

    <footer class="footer-container">
        @yield('footer-content')
        <a class="development">Desenvolvido com ❤ 2021 Adapti-Soluções Web</a>
        <div class="adapti-links">
            <a class="facebook-link" href="https://www.facebook.com/AdaptiEmpresaJr"><i class="fab fa-facebook"></i></a>
            <a class="instagram-link" href="https://www.instagram.com/adaptiempresajr/"><i class="fab fa-instagram"></i></a>
            <a class="linkedin-link" href="https://www.linkedin.com/company/adaptiempresajr/"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </footer>
</body>
</html> 