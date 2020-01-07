<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Usuário</title>
</head>
<body>

	<form action="{{ route('users.store') }}" method="post">
		@csrf
		<label for="">Nome:</label>
		<input type="text" name="name">

		<label for="">Email:</label>
		<input type="email" name="email">

		<label for="">Senha:</label>
		<input type="password" name="password">	

		<input type="submit" value="Cadastrar">

	</form>

</body>
</html>