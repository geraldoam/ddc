<!--- Extends Layout--->
@extends('layout.layout')


<!--- Section Init --->
@section('content')






<!-- Jumbotron -->
<section class="jumbotron text-center bg-transparent" style="margin-top: 100px; margin-bottom: 100px">
<div class="container">
  <i class="fas fa-user-graduate fa-5x"></i>
  <h1 style="margin-top: 20px">Cursos</h1>
  <p class="lead text-muted">Role a página e conheça os cursos ofertados pela escola.</p>
  <p>
    <a href="/" class="btn btn-primary my-2">Início</a>
    <a href="{{ route('info.professores') }}" class="btn btn-secondary my-2">Professores</a>
  </p>
</div>
</section>


<!--- Card --->
<div class="container">

    <hr class="featurette-divider">

    <div class="row featurette p-5">
      <div class="col-md-7">
        <h2 class="featurette-heading">Curso Técnico</span></h2>
        <p class="lead text-muted">Curso Técnico de Análises Químicas possui matérias específicas que direcionam o aluno para uma melhor formação ao mercado de trabalho, além de somar as matérias regulares. O aluno terá acesso a um laboratório que segue todas as normas de segurança.</p>
      </div>
      <div class="col-md-3 p-5 ml-lg-5">
        <i class="fas fa-flask fa-10x ml-lg-5"></i>
      </div>
    </div>
    
    <hr class="featurette-divider">

    <div class="row featurette p-5">
      <div class="col-md-7">
        <h2 class="featurette-heading">Ensino Regular</span></h2>
        <p class="lead text-muted">Esse curso oferta o Ensino Médio em sua grade curricular pura. Para você que procura apenas estudar e não pensa em sair do Ensino Médio já trabalhando. Com uma fantástica equipe de Professores, o Ensino Regular oferece muito aos alunos.</p>
      </div>
      <div class="col-md-3 p-5 ml-lg-5">
        <i class="fas fa-book fa-10x ml-lg-5"></i>
      </div>
    </div>
    
    <hr class="featurette-divider">

    <div class="row featurette p-5">
      <div class="col-md-7">
        <h2 class="featurette-heading">EJA</span></h2>
        <p class="lead text-muted">Educação de Jovens e Adultos, são Cursos de Ensino Fundamental e Médio na modalidade de Educação de Jovens e Adultos nas escolas estaduais do Estado do Espírito Santo. As aulas ocorrem às terças, quartas e quintas feiras com aulas presenciais e às segundas e sextas feiras com aulas não presenciais. Para ingresso nos cursos, o aluno deverá ter a idade mínima de 15 anos para o Ensino Fundamental e 18 anos para o Ensino Médio.</p>
      </div>
      <div class="col-md-3 p-5 ml-lg-5">
        <i class="fas fa-atom fa-10x ml-lg-5"></i>
      </div>
    </div>
    
    <hr class="featurette-divider">

    <div class="row featurette p-5">
      <div class="col-md-7">
        <h2 class="featurette-heading">NEEEJA</span></h2>
        <p class="lead text-muted">Núcleos Estaduais de Educação de Jovens e Adultos, adota a metodologia de Semipresencial com estudos individualizados, com o uso da tecnologia através da Plataforma CECIERJ ou material impresso oferecido pelo Núcleo. Os NEEJAs funcionam dentro de uma unidade escolar. Para ingresso nos NEEJAs, o aluno deverá ter a idade mínima de 15 anos para o Ensino Fundamental e 18 anos para o Ensino Médio.</p>
      </div>
      <div class="col-md-3 p-5 ml-lg-5">
        <i class="fas fa-book-reader fa-10x ml-lg-5"></i>
      </div>
    </div>
    
    <hr class="featurette-divider">


</div>






<!--- Section Finish --->
@endsection