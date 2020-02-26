<!--- Extends Layout--->
@extends('layout.layout')


<!--- Section Init --->
@section('content')


<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid" style="margin-top: 50px">
  <div class="container">
    <h1 class="display-3">{{ config('app.name', 'app.name') }}</h1>
    <p class="display-5 lead text-roboto text-muted">Mesclando tecnologia aos estudos.</p>
  </div>
</div>


<hr class="featurette-divider">


<!--- Media Objects --->
<div class="container">
    <div class="row">

      <div class="col-lg-4 p-lg-5">
        <i class="fas fa-random fa-5x mediaIconColor ml-lg-2 p-2"></i>
        <h2 style="margin-top: 10px">Migração</h2>
        <p class="text-muted">Diversos projetos da escola estão nesse site. Além das informações básicas da instituição.</p>
      </div>

      <div class="col-lg-4 p-lg-5">
        <i class="fas fa-book fa-5x mediaIconColor ml-lg-2 p-2"></i>
        <h2 style="margin-top: 10px">Educação</h2>
        <p class="text-muted">Banco de questões online ao qual evita uso do papel e incentiva o uso da tecnologia.</p>
      </div>


      <div class="col-lg-4 p-lg-5">
        <i class="fas fa-code fa-5x mediaIconColor ml-lg-2 p-2"></i>
        <h2 style="margin-top: 10px">Tecnologia</h2>
        <p class="text-muted">Você pode participar do projeto, contribuindo com seu código em nosso GitHub.</p>
      </div>

    </div>
  </div>

<!--- Card --->
<div class="container">

    <hr class="featurette-divider">

    <div class="row featurette" style="margin-top: 80px; margin-bottom: 80px">
      <div class="col-md-7">
        <h2 class="featurette-heading">Quero olhar minhas notas.</span></h2>
        <p class="lead text-muted">Clique no botão e seja rapidamente direcionado ao sistema de boletim escolar fornecido pelo SEGES.</p>
      </div>
      <div class="col-md-5">
        <a type="button" class="btn btn-primary text-white btn-lg btn-block" target="_blank" href="https://segespais.caedufjf.net/seges/login.faces" style="margin-top: 10%; margin-bottom: 3%">Boletim</a>
      </div>
    </div>
    
    <hr class="featurette-divider">


    <div class="row featurette" style="margin-top: 80px; margin-bottom: 80px">
      <div class="col-md-7">
        <h2 class="featurette-heading">Precisa de ajuda?</span></h2>
        <p class="lead text-muted">Você pode entrar na nossa aba de contato e saber mais sobre.</p>
      </div>
      <div class="col-md-5">
        <button class="btn btn-primary text-white btn-lg btn-block" style="margin-top: 10%; margin-bottom: 3%">Contato</button>
      </div>
    </div>


    <hr class="featurette-divider">


    <div class="row featurette" style="margin-top: 80px; margin-bottom: 80px">
      <div class="col-md-7">
        <h2 class="featurette-heading">Cursos que a escola oferece.</span></h2>
        <p class="lead text-muted">Orientação para escolha de cursos e detalhes dos mesmos. Esta aba mostrará todos os cursos presentes na escola.</p>
      </div>
      <div class="col-md-5">
        <a type="button" class="btn btn-primary text-white btn-lg btn-block" href="{{ route('info.cursos') }}" style="margin-top: 10%; margin-bottom: 3%">Cursos</a>
      </div>
    </div>


    <hr class="featurette-divider">


    <div class="row featurette" style="margin-top: 80px; margin-bottom: 80px">
      <div class="col-md-7">
        <h2 class="featurette-heading">Conheça a equipe!</span></h2>
        <p class="lead text-muted">Está a procura dos atuais professores da escola? É só clicar no botão que você irá para a página do professor.</p>
      </div>
      <div class="col-md-5">
        <a type="button" class="btn btn-primary text-white btn-lg btn-block" href="{{ route('info.professores') }}" style="margin-top: 10%; margin-bottom: 3%">Professores</a>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette" style="margin-top: 80px; margin-bottom: 80px">
      <div class="col-md-7">
        <h2 class="featurette-heading">Você possui conhecimento Computacional?</span></h2>
        <p class="lead text-muted">Entre no nosso GitHub e contribua com seu código, tornando o site melhor e mais seguro.</p>
      </div>
      <div class="col-md-5">
        <a type="button" class="btn btn-primary text-white btn-lg btn-block" target="_blank" href="https://github.com/i386angel/ddc" style="margin-top: 10%; margin-bottom: 3%">Código</a>
      </div>
    </div>

</div>

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


<!--- Section Finish --->
@endsection