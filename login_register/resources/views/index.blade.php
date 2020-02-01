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
    
  <center>

    <div class="container row">

      <div class="col-sm-6">
        <div class="card cardSettings cardColorSettings">
          <div class="card-header"><i class="fas fa-code cardIconColors"></i></div>
          <div class="card-body">
            <h5 class="card-title cardTitleColor">Sabe programação e quer contribuir?</h5>
            <p class="card-text cardTextColor">É fácil, o nosso site possui o <a style="color: #4ea3bb">código aberto</a>, para que você possa contribuir e saber o que acontece nos bastidores.</p>
            <div class="button_cont" align="center"><button class="btn btn-sm example_e" href="add-website-here" target="_blank" rel="nofollow noopener">Contribuir</button></div>
          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="card cardSettings cardColorSettings">
          <div class="card-header cardIconColors"><i class="fas fa-th-large"></i></div>
          <div class="card-body">
            <h5 class="card-title cardTitleColor">Fácil e Rápido!</h5>
            <p class="card-text cardTextColor">A arquitetura do site foi elaborada para atender melhor o público jovem, com tendências minimalistas.</p>
            <div class="button_cont" align="center"><button class="btn btn-sm example_e" href="add-website-here" target="_blank" rel="nofollow noopener">Equipe</button></div>
          </div>
        </div>
      </div>

    </div> 


    <div class="container row">
      

      <div class="col-sm-6">
        <div class="card cardSettings cardColorSettings">
          <div class="card-header cardIconColors"><i class="fas fa-desktop"></i></i></div>
          <div class="card-body">
            <h5 class="card-title cardTitleColor">Tecnologias atualizadas!</h5>
            <p class="card-text cardTextColor">O site Lesson Session utiliza tecnologias atualizadas, ou seja, nós visamos em segurança e qualidade.</p>
     
            <div class="button_cont" align="center"><button class="btn btn-sm example_e" href="add-website-here" target="_blank" rel="nofollow noopener">Tecnologias</button></div>

          </div>
        </div>
      </div>


      <div class="col-sm-6">
        <div class="card cardSettings cardColorSettings">
          <div class="card-header"><i class="fas fa-graduation-cap cardIconColors"></i></div>
          <div class="card-body">
            <h5 class="card-title cardTitleColor">Chega de carregar peso!</h5>
            <p class="card-text cardTextColor">Convide seu professor ou diretor para utilizar o site, fazendo assim com que diminua os gastos em sua instituição. Compartilhe!</p>


            <div class="button_cont" align="center"><button class="btn btn-sm example_e" href="add-website-here" target="_blank" rel="nofollow noopener">Compartilhar</button></div>

          </div>
        </div>
      </div>

    </div>



  </center>


@endsection