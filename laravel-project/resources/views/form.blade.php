<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cadastro de Post</title>
	<link rel="stylesheet" href="">
</head>
<body>

	<form action="{{ route('debug') }}" method="post">
		@csrf
		<label>Título</label>
		<input type="text" name="title">

		<br>
		<br>
		<label>Sub Título</label>
		<input type="text" name="subtitle">

		<br>
		<br>
		<label>Título</label>
		<textarea name="content" cols="30" rows="10"></textarea>

		<input type="submit" value="Cadastrar Artigo" name="">
	</form>

</body>
</html>