<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>    @yield('title')    </title>

     <!-- Fonte do Google -->
   <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

   <!-- CSS Bootstrap -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
       integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

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
                        Home <span class="sr-only">(página atual)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/form">
                        Formulário <span class="sr-only">(página atual)</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/list">
                        Lista <span class="sr-only">(página atual)</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer>
        <a href="http://proeg.ufpa.br/cotic/">
            <p>Desafio <span id="letra-laranja">COTIC</span> 2022</p>
        </a>
    </footer>

</body>

</html>
