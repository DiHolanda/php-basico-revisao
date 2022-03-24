<?php 

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$interesses = $_POST["interesse"] ?? null;
	$onde_conheceu = $_POST["onde_conheceu"];
	$mensagem = $_POST["mensagem"];
	$redirecionar = $_POST["redirecionar"] ?? null;

	if(empty(trim($nome))){
		echo "Favor informar o nome";
	}

	
 ?>