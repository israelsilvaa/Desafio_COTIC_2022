<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>

    <!-- Fonte do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>

    <!-- ICONES da aplicação -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body class="main-bg">

    <nav class="navbar navbar-expand-lg navbar-light bg-light transparent">
        <a class="navbar-brand" href="#"><img src="../assets/logo_cotic.fw.png" width="256" height="64"
                alt="" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
            aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">
                        Home
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/personagem/form">
                        Formulário 
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/list">
                        Lista 
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/sobre">
                        Sobre 
                    </a>
                </li>                <li class="nav-item active">
                    <a class="nav-link" href="{{Route('site.login')}}">
                        Login 
                    </a>
                </li>
                <li>                <li class="nav-item active">
                    <a class="nav-link" href="{{route('site.sair')}}">
                        Sair 
                    </a>
                </li>
            </ul>
        </div>
    </nav>


    
    <div 
        @if (session('msg'))
            <p class="msg">{{ session('msg') }}</p>
        @endif
        @yield('content')
    </div>
  


    <footer>
        <a href="http://proeg.ufpa.br/cotic/">
            <p>Desafio <span id="letra-laranja">COTIC</span> 2022</p>
        </a>
    </footer>

</body>

</html>
