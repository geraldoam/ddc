<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login - Administração</title>
</head>
<body>
	<form action="{{ route('admin.login.do') }}" method="post">
		@csrf
		<br>
		<label for="email">Endereço de Email</label>
		<br>
		<input type="text" name="email" id="email" placeholder="Seu Email" required="true">
		<br>

		<br>
		<label for="password">Senha</label>
		<br>
		<input type="password" name="password" id="password" placeholder="Sua Senha" required="true">
		<br>

		<br>
		<button type="submit">Login</button>

		@if($errors->all())
			@foreach($errors->all() as $error) 
				<div>
					{{ $error }}
				</div>
			@endforeach
		@endif
	</form>
</body>
</html>