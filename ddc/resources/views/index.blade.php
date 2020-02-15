<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/7afebb249a.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet"> 
</head>
<body>
  
        <!-- Navbar --->

        <nav class="navbar navbar-expand-md navbar-dark navbarColor shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <i class="fas fa-graduation-cap"></i> &nbsp | &nbsp
                    {{ config('app.name', 'Lesson Sesson') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                              <ul class="navbar-nav">
                                <li class="nav-item">
                                  <a class="nav-link navLink" href="#">Curso Técnico</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link navLink" href="#">Ensino Regular</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link navLink" href="#">Professores</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link navLink" href="#">Exercícios</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link navLink" href="#">Contato</a>
                                </li>                                    
                              </ul>                        
                        @else

                                <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-lg-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('painel') }}">
                                        {{ __('Painel de Controle') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Sair da Conta') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>




    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid jumbotronStyle">
      <div class="container">
        <h1 class="display-2">{{ config('app.name', 'app.name') }}</h1>
        <p class="display-5 lead jumbotronGray text-roboto">Mesclando tecnologia aos estudos.</p>
      </div>
    </div>


<!--- Media Objects -->

    <ul class="list-unstyled container">

      <li class="media">
        <i class="fas fa-random fa-3x mediaIconSize"></i>
        <div class="media-body">
          <h5 class="mt-0 mb-1 mediaColorTitle fontRaleway">Migração</h5>
          <h6 class="mt-2 mb-5 mediaColorText">Diversos projetos da escola estão nesse site. Além das informações básicas da instituição.<h6>
      </li>

      <li class="media">
        <i class="fas fa-book fa-3x mediaIconSize"></i>
        <div class="media-body">
          <h5 class="mt-0 mb-1 mediaColorTitle fontRaleway">Educação</h5>
          <h6 class="mt-2 mb-5 mediaColorText">Banco de questões online ao qual evita o gasto com papel e maior implementação da tecnologia na instituição.<h6>
      </li>

      <li class="media">
        <i class="fas fa-child fa-3x mediaIconSize"></i>
        <div class="media-body">
          <h5 class="mt-0 mb-1 mediaColorTitle fontRaleway">Código Aberto</h5>
          <h6 class="mt-2 mb-5 mediaColorText">Você que gosta de programação e tecnologia pode contribuir para o projeto, que é Open Source, o tornando um site mais seguro e intuitivo.<h6>
      </li>

    </ul>




    <!--- Card --->
    
  <center>


    <div class="container row">
      

      <div class="col-sm-6">
        <div class="card cardSettings cardColorSettings">
          <div class="card-header cardIconColors"><i class="fas fa-address-card"></i></i></div>
          <div class="card-body">
            <h5 class="card-title cardTitleColor">Quero ver minhas notas!</h5>
            <p class="card-text cardTextColor">Clique no botão abaixo e seja direcionado ao boletim escolar do seges.</p>
     
            <div class="button_cont" align="center"><a class="btn btn-sm example_e" target="_blank" href="https://segespais.caedufjf.net/seges/login.faces"  rel="nofollow noopener">Boletim</a></div>

          </div>
        </div>
      </div>


      <div class="col-sm-6">
        <div class="card cardSettings cardColorSettings">
          <div class="card-header cardIconColors"><i class="fas fa-question"></i></div>
          <div class="card-body">
            <h5 class="card-title cardTitleColor">Alguma dúvida?</h5>
            <p class="card-text cardTextColor">Entre na nossa aba de contato e perguntas frequentes.</p>
            <div class="button_cont" align="center">
              <a class="btn btn-sm example_e" href="{{ route('info.team') }}"  rel="nofollow noopener">Contato</a>
            </div>
          </div>
        </div>
      </div>

    </div>


    <div class="container row">

      <div class="col-sm-6">
        <div class="card cardSettings cardColorSettings">
          <div class="card-header"><i class="fas fa-graduation-cap cardIconColors"></i></div>
          <div class="card-body">
            <h5 class="card-title cardTitleColor">Conheça nosso time de professores.</h5>
            <p class="card-text cardTextColor">Saiba os professores da instituição. Não só isso, exercícios e influência.</p>


            <div class="button_cont" align="center"><a class="btn btn-sm example_e" href="{{ route('info.share') }}"  rel="nofollow noopener">Professores</a></div>

          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card cardSettings cardColorSettings">
          <div class="card-header"><i class="fas fa-code cardIconColors"></i></div>
          <div class="card-body">
            <h5 class="card-title cardTitleColor">Sabe programação e quer contribuir?</h5>
            <p class="card-text cardTextColor">O site possui o código aberto para que você possa programar também.</p>
            <div class="button_cont" align="center">
              <a class="btn btn-sm example_e" href="https://github.com/i386angel/ddc" target="_blank" rel="nofollow noopener">Código</a>
            </div>
          </div>
        </div>
      </div>

    </div> 




  </center>


  <footer class="container footerPropriets">
    <p class="float-right"><a href="#"></a></p>
    <p>&copy; 2020 &middot; <a href="https://github.com/i386angel" class="badge badge-primary footerButtonColors">GitHub</a> &middot; <a href="#" class="badge badge-primary footerButtonColors">Termos</a></p>
  </footer>


  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>