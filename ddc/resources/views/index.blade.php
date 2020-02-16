<!--- Extends Layout--->
@extends('layout.layout')


<!--- Section Init --->
@section('content')


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



<!--- Card -->

<div class="container" align="center">

  <div class="card text-center cardSettings cardColorSettings">
    <div class="card-header cardIconColors"><i class="fas fa-address-card fa-2x"></i></i></div>
    <div class="card-body">
      <h5 class="card-title cardTitleColor">Quero ver minhas notas!</h5>
      <p class="card-text cardTextColor">Clique no botão abaixo e seja rapidamente direcionado ao boletim escolar, ao qual pertence ao SEGES.</p>
      <a type="button" class="btn cardButtonColor" target="_blank" href="https://segespais.caedufjf.net/seges/login.faces">Boletim</a>
    </div>
    <div class="card-footer text-muted">
    </div>
  </div>

  <div class="card text-center cardSettings cardColorSettings">
    <div class="card-header cardIconColors"><i class="fas fa-question fa-2x"></i></div>
    <div class="card-body">
      <h5 class="card-title cardTitleColor">Precisa de ajuda?</h5>
      <p class="card-text cardTextColor">Dúvida sobre matrícula, como entrar em contato e outros. </p>
      <div class="button_cont" align="center">
        <a class="btn cardButtonColor" href="{{ route('info.contato') }}"  rel="nofollow noopener">Contato</a>
      </div>
    </div>
    <div class="card-footer text-muted">
    </div>
  </div>

  <div class="card text-center cardSettings cardColorSettings">
    <div class="card-header"><i class="fas fa-graduation-cap cardIconColors fa-2x"></i></div>
    <div class="card-body">
      <h5 class="card-title cardTitleColor">Conheça a equipe!</h5>
      <p class="card-text cardTextColor">Não deixe de conferir e acompanhar os professores e profissionais da instituição.</p>
      <div class="button_cont" align="center"><a class="btn cardButtonColor" href="{{ route('info.professores') }}"  rel="nofollow noopener">Professores</a></div>
    </div>
    <div class="card-footer text-muted"> 
    </div>
  </div>

  <div class="card text-center cardSettings cardColorSettings">
    <div class="card-header"><i class="fas fa-code cardIconColors fa-2x"></i></div>
    <div class="card-body">
      <h5 class="card-title cardTitleColor">Amante de Tecnologia?</h5>
      <p class="card-text cardTextColor">Se você possui afinidade com a área de programação e queira contribuir com seu código é só clicar no botão abaixo!</p>
      <div class="button_cont" align="center">
        <a class="btn cardButtonColor" href="https://github.com/i386angel/ddc" target="_blank" rel="nofollow noopener">Código</a>
      </div>
    </div>
    <div class="card-footer text-muted">
    </div>
  </div>

</div>



<!--- Section Finish --->
@endsection