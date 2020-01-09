<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Usuário</title>
</head>
<body>

	<form action="{{ route('user.update', ['user' => $user->id ]) }}" method="post">
		@csrf
		@method('put')
		<label for="">Nome:</label>
		<input type="text" name="name" value="{{ $user->name }}">

		<label for="">Email:</label>
		<input type="email" name="email" value="{{ $user->email }}">

		<label for="">Senha:</label>
		<input type="password" name="password">	

		<input type="submit" value="Editar">

	</form>

</body>
</html>