<!--- Extends Layout--->
@extends('layout.layout')


<!--- Section Init --->
@section('content')






<!-- Jumbotron -->
<section class="jumbotron text-center bg-transparent" style="margin-top: 40px">
<div class="container">
  <i class="fas fa-user-graduate fa-5x"></i>
  <h1 style="margin-top: 20px">Cursos</h1>
  <p class="lead text-muted">Conheça abaixo os cursos ofertados pela escola.</p>
  <p>
    <a href="/" class="btn btn-primary my-2">Início</a>
    <a href="{{ route('info.professores') }}" class="btn btn-secondary my-2">Professores</a>
  </p>
</div>
</section>







<!--- Section Finish --->
@endsection