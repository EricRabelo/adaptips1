<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/template.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/form-crud.css">
    <title>@yield('title')</title>
</head>

<body>
    <header class="header-container">
        <nav class = "nav-container">
            <div class="nav-logo">
                <img src="https://media.linklist.bio/avatars/cedee2509fbc762df345a550f0d6a2b1.png" alt="">
                    <a class="logo">Adapti Filmes</a>
                </div>
            <ul class="nav-list">
                <li><a class="link" href="{{route('movie.index')}}">Inicio</a></li>
                <li><a class="link" href="{{ route('movie.create') }}">Adicionar Filmes</a></li>
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
            <a class="facebook-link" href="https://www.facebook.com/AdaptiEmpresaJr"><img src="/icons/facebook.png" alt="Facebook"></a>
            <a class="instagram-link" href="https://www.instagram.com/adaptiempresajr/"><img src="/icons/instagram.png" alt="Instagram"></a>
            <a class="linkedin-link" href="https://www.linkedin.com/company/adaptiempresajr/"><img src="/icons/linkedin.png" alt="Linkedin"></a>
        </div>
    </footer>
</body>
</html> 