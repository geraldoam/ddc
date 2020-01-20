@extends('layouts.layout')


@section('content')

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid jumbotronStyle">
      <div class="container">
        <h1 class="display-2">Lesson Session</h1>
        <p class="display-5 lead jumbotronGray text-roboto">Para professores e alunos</p>
      </div>
    </div>


    <!--- Media Objects --->
    <ul class="list-unstyled container">

      <li class="media">
        <i class="fas fa-lock fa-3x mediaIconSize"></i>
        <div class="media-body">
          <h5 class="mt-0 mb-1 mediaColorTitle fontRaleway">Segurança</h5>
          <h6 class="mt-2 mb-5 mediaColorText">Seus dados são protegidos com criptografia.<h6>
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

  <center class="cardSettings">

      <div class="card text-white mb-3 cardSettings cardColorSettings" style="max-width: 30rem;">
        <div class="card-header"><i class="fas fa-code cardIconColors"></i></div>
        <div class="card-body">
          <h5 class="card-title cardTitleColor">Sabe programação e quer contribuir?</h5>
          <p class="card-text cardTextColor">É fácil, o nosso site possui o <a style="color: #4ea3bb" href="https://github.com/i386angel">código aberto</a>, para que você possa contribuir e saber o que acontece nos bastidores.</p>
        </div>
      </div>

      <div class="card text-white mb-3 cardSettings cardColorSettings" style="max-width: 30rem;">
        <div class="card-header"><i class="fas fa-graduation-cap cardIconColors"></i></div>
        <div class="card-body">
          <h5 class="card-title cardTitleColor">Chega de carregar peso!</h5>
          <p class="card-text cardTextColor">Convide seu professor ou diretor para utilizar o site, fazendo assim com que diminua os gastos em sua instituição. Além disso, ninguém gosta de carregar peso, não é mesmo?</p>
        </div>
      </div>

      <div class="card text-white mb-3 cardSettings cardColorSettings" style="max-width: 30rem;">
        <div class="card-header cardIconColors"><i class="fas fa-check"></i></div>
        <div class="card-body">
          <h5 class="card-title cardTitleColor">Tecnologias atualizadas!</h5>
          <p class="card-text cardTextColor">O site Lesson Session utiliza tecnologias atualizadas, ou seja, nós visamos em segurança e qualidade.</p>
        </div>
      </div>

  </center>

    <!--- Scripts --->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7afebb249a.js" crossorigin="anonymous"></script>
@endsection