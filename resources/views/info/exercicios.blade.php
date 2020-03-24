<!--- Extends Layout--->
@extends('layout.layout')


<!--- Section Init --->
@section('content')





<!--- Header --->
<section>
	<div class="jumbotron text-center bg-transparent" style="margin-top: 150px;margin-bottom: 240px">
		<div class="container">
		  <i class="fas fa-book fa-5x"></i>
		  <h1 style="margin-top: 20px">Exercícios</h1>
		  <p class="lead text-muted">Role a página e clique na matéria ao qual você deseja.</p>
		  <p>
		    <a href="/" class="btn btn-primary my-2">Voltar ao início</a>
		    <a href="{{ route('info.contato') }}" class="btn btn-secondary my-2">Contato</a>
		  </p>
		</div>
	</div>
</section>


<!--- Title Materias --->
<section>
	<hr class="featurette-divider">

	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <h1 class="display-2 text-center">Matérias</h1>
	    <p class="lead text-muted text-center">Segue abaixo o particionamento entre matérias.</p>
	  </div>
	</div>
</section>


<!--- Humanas --->
<section class="container">
	<hr class="featurette-divider">

	<!--- Humanas --->
	<div class="jumbotron jumbotron-fluid m-lg-5">
	  <div class="container">
	    <h1 class="display-4">Humanas</h1>
	  </div>
	</div>

	<hr class="featurette-divider mb-5">

	<!--- Cards --->
	<div class="p-3 row align-items-start">


		<div class="col-xl-4 p-3">
			<div class="card bg-transparent border-0">
			  <div class="card-body">
			    <h5 class="card-title"><a href="#" class="btn btn-lg btn-block btn-primary">Português</a></h5>
			    <p class="card-text text-muted">Complexa para uns e fácil para outros, a Lingua Portuguesa é a nossa lingua mãe e faz a comunicação mais clara possível.</p>
			  </div>
			</div>
		</div>

		<div class="col-xl-4 p-3">
			<div class="card bg-transparent border-0">
			  <div class="card-body">
			    <h5 class="card-title"><a href="#" class="btn btn-lg btn-block btn-primary">Geografia</a></h5>
			    <p class="card-text text-muted">Estudo da superfície terrestre e a distribuição espacial de fenômenos significativos na paisagem.</p>
			  </div>
			</div>
		</div>

		<div class="col-xl-4 p-3">
			<div class="card bg-transparent border-0">
			  <div class="card-body">
			    <h5 class="card-title"><a href="#" class="btn btn-lg btn-block btn-primary">História</a></h5>
			    <p class="card-text text-muted">Estuda o ser humano e sua ação no tempo e no espaço concomitantemente à análise de processos e eventos ocorridos no passado.</p>
			  </div>
			</div>
		</div>		

	</div>


	<div class="p-3 row align-items-start">

		<div class="col-xl-4 p-3">
			<div class="card bg-transparent border-0">
			  <div class="card-body">
			    <h5 class="card-title"><a href="#" class="btn btn-lg btn-block btn-primary">Filosofia</a></h5>
			    <p class="card-text text-muted">Estudo de questões gerais e fundamentais sobre a existência, conhecimento, valores, razão, mente, e linguagem</p>
			  </div>
			</div>
		</div>

		<div class="col-xl-4 p-3">
			<div class="card bg-transparent border-0">
			  <div class="card-body">
			    <h5 class="card-title"><a href="#" class="btn btn-lg btn-block btn-primary">Sociologia</a></h5>
			    <p class="card-text text-muted">Estuda o comportamento humano em função do meio e os processos que interligam os indivíduos em associações, grupos e instituições.</p>
			  </div>
			</div>
		</div>

		<div class="col-xl-4 p-3">
			<div class="card bg-transparent border-0">
			  <div class="card-body">
			    <h5 class="card-title"><a href="#" class="btn btn-lg btn-block btn-primary">Inglês</a></h5>
			    <p class="card-text text-muted">A lingua globalmente falada. É de extrema importância aprender ela.</p>
			  </div>
			</div>
		</div>		

	</div>


	<div class="p-3 row align-items-start">

		<div class="col-xl-4 p-3">
			<div class="card bg-transparent border-0">
			  <div class="card-body">
			    <h5 class="card-title"><a href="#" class="btn btn-lg btn-block btn-primary">Espanhol</a></h5>
			    <p class="card-text text-muted">A queridinha, é a segunda lingua mais falada do mundo. De extrema importância.</p>
			  </div>
			</div>
		</div>

		<div class="col-xl-4 p-3">
			<div class="card bg-transparent border-0">
			  <div class="card-body">
			    <h5 class="card-title"><a href="#" class="btn btn-lg btn-block btn-primary">Artes</a></h5>
			    <p class="card-text text-muted">Estuda a Arte, que é a atividade humana ligada às manifestações de ordem estética ou comunicativa, realizada por meio de uma grande variedade de linguagens.</p>
			  </div>
			</div>
		</div>	

	</div>		
</section>


<!--- Exatas --->
<section class="container">
	<hr class="featurette-divider mt-5">

	<!--- Humanas --->
	<div class="jumbotron jumbotron-fluid m-lg-5">
	  <div class="container">
	    <h1 class="display-4">Exatas</h1>
	  </div>
	</div>

	<hr class="featurette-divider">

	<!--- Cards --->
	<div class="p-3 row align-items-start">


		<div class="col-xl-4 p-3">
			<div class="card bg-transparent border-0">
			  <div class="card-body">
			    <h5 class="card-title"><a href="#" class="btn btn-lg btn-block btn-primary">Matemática</a></h5>
			    <p class="card-text text-muted">Ciência do raciocínio lógico e abstrato, que estuda quantidades, medidas, espaços, estruturas, variações e estatísticas.</p>
			  </div>
			</div>
		</div>

		<div class="col-xl-4 p-3">
			<div class="card bg-transparent border-0">
			  <div class="card-body">
			    <h5 class="card-title"><a href="#" class="btn btn-lg btn-block btn-primary">Química</a></h5>
			    <p class="card-text text-muted">Ciência que estuda a composição, estrutura, propriedades da matéria, as mudanças sofridas por ela durante as reações químicas e a sua relação com a energia.</p>
			  </div>
			</div>
		</div>

		<div class="col-xl-4 p-3">
			<div class="card bg-transparent border-0">
			  <div class="card-body">
			    <h5 class="card-title"><a href="#" class="btn btn-lg btn-block btn-primary">Física</a></h5>
			    <p class="card-text text-muted">Ciência que estuda a natureza e seus fenômenos em seus aspectos mais gerais.</p>
			  </div>
			</div>
		</div>		

	</div>

	<div class="p-3 row align-items-start">

		<div class="col-xl-4 p-3">
			<div class="card bg-transparent border-0">
			  <div class="card-body">
			    <h5 class="card-title"><a href="#" class="btn btn-lg btn-block btn-primary">Biologia</a></h5>
			    <p class="card-text text-muted">Ciência que estuda a vida e os organismos vivos.</p>
			  </div>
			</div>
		</div>

	</div>
</section>


<!--- Section Finish --->
@endsection