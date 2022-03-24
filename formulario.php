<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulário</title>
</head>
<body>
	<h1> Formulário com PHP e Validação</h1>

	<hr>

	<form action="23-valida-form.php" method="post">
		
		<label for="nome"> Nome: </label> <br>
		<input type="text" name="nome"> <br><br>

		<label for="email"> Email: </label> <br>
		<input type="text" name="email"> <br><br>

		<fieldset>
			
			<legend> Área de Interesse </legend>

			<input type="checkbox" name="interesse[]" value="Informática"> Informática <br>
			<input type="checkbox" name="interesse[]" value="Xadrez"> Xadrez <br>
			<input type="checkbox" name="interesse[]" value="Literatura"> Literatura <br>
			<input type="checkbox" name="interesse[]" value="Games"> Games <br>
			<input type="checkbox" name="interesse[]" value="Ciência"> Ciência <br>
			<input type="checkbox" name="interesse[]" value="Estudo"> Estudo <br>
			
		</fieldset>

		<br><br>

		<label for="onde_conheceu"> Onde Conheceu? </label>
		<select name="onde_conheceu" id="">
			<option value=""> Selecione </option>
			<option value="amigos"> Amigos </option>
			<option value="fumaça"> Sinal de Fumaça </option>
			<option value="Ameaça"> Sob Ameaça </option>

		</select>

		<br><br>

		<label for="mensagem"> Mensagem: </label> <br>
		<textarea name="mensagem" id="" cols="30" rows="10"></textarea>

		<br><br>

		<fieldset>
			
			<legend> Redirecionar para: </legend>

			<input type="radio" name="redirecionar" value="home"> Home <br>
			<input type="radio" name="redirecionar" value="contato"> Contato <br>

		</fieldset>

		<hr>

		<button type="submit"> Enviar </button>

		

	</form>
</body>
</html>