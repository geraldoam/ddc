<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Usuário</title>
</head>
<body>

	<form action="{{ route('users.edit', ['user' => $user->id ]) }}" method="post">
		@csrf
		@method('PUT')
		<label for="">Nome:</label>
		<input type="text" name="name" value="{{ $user->name }}">

		<label for="">Email:</label>
		<input type="email" name="email" value="{{ $user->email }}">

		<label for="">Senha:</label>
		<input type="password" name="password">	

		<input type="submit" value="Alterar">

	</form>

</body>
</html>