<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap core CSS -->
    <link href="css/app.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/forms.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav">
        <a href="./" style="outline:none">
          <div id="bannerImg">
            <img src="imgs/logo.png" id="logo" style="width:360px; height:50px; margin:24px 0px 0px 19px;">
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="/">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="faça-uma-doação">Faça uma doação</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="seja-um-voluntário">Seja um voluntário</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sobre">Sobre</a>
            </li>
            <?php if($session_logado == false){ ?>
            <li class="nav-item">
              <a class="nav-link" href="login" style="padding: 0px 30px 0px 35px !important;">Login</a>
            </li>
            <?php }else if($session_logado == true){ ?>
            <li class="nav-item">
              <a class="nav-link" href="sair" style="padding: 0px 30px 0px 40px !important;">Sair</a>
            </li>
            <?php } ?>
          </ul>
        </div>
      </nav>
    </header>

    <section>
      @yield('content')
    </section>

    <footer>

    </footer>

    <script src="js/app.js"></script>
    @yield('script')
  </body>
</html>