<!--- Extends Layout--->
@extends('layout.layout')


<!--- Section Init --->
@section('content')






<!--- Header --->
<section>
	<div class="jumbotron text-center bg-transparent" style="margin-top: 100px;margin-bottom: 100px">
		<div class="container">
		  <i class="fas fa-phone fa-5x"></i>
		  <h1 style="margin-top: 20px">Contato</h1>
		  <p class="lead text-muted">Role a página, entre em contato.</p>
		  <p>
		    <a href="/" class="btn btn-primary my-2">Início</a>
		  </p>
		</div>
	</div>
</section>


<!--- Phone --->
<section>
	<hr class="featurette-divider">

	<div class="jumbotron">
	  <h1 class="display-4">Telefone</h1>
	  <p class="lead">Ligue para a secretaria e obtenha informações sobre datas, matrícula, horários e etc.</p>
	  <hr class="my-4">
	  <h3>027 9-9999-9999</h3>
	</div>
</section>


<!--- Email --->
<section>
	<hr class="featurette-divider mt-5 mb-5">

	<div class="jumbotron">
	  <h1 class="display-4">Email</h1>
	  <p class="lead">Mandei um email para casos mais específicos.</p>
	  <hr class="my-4">
	  <h3>ddc@gmail.com</h3>
	</div>
</section>


<!--- Present --->
<section>
	<hr class="featurette-divider mt-5 mb-5">

	<div class="jumbotron">
	  <h1 class="display-4">Secretaria</h1>
	  <p class="lead">Segue abaixo os horários de atendimento da secretaria.</p>
	  <hr class="my-4">
	  <h3>De segunda a sexta, entre 07:00 ~ 11:00 e 13:30 ~ 16:30.</h3>
	</div>
</section>


<!--- Director --->
<section>
	<hr class="featurette-divider mt-5 mb-5">

	<div class="jumbotron">
	  <h1 class="display-4">Diretor</h1>
	  <p class="lead">Segue abaixo os horários de atendimento da diretoria.</p>
	  <hr class="my-4">
	  <h3>De segunda a sexta, entre 08:00 ~ 10:00 e 14:30 ~ 15:30.</h3>
	</div>
</section>


<!--- Section Finish --->
@endsection