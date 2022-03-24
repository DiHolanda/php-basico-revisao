<?php 

	$nome = limpatag($_POST["nome"]);
	$email = limpatag($_POST["email"]);
	$interesses = $_POST["interesse"] ?? null;
	$onde_conheceu = $_POST["onde_conheceu"];
	$mensagem = limpatag($_POST["mensagem"]);
	$redirecionar = $_POST["redirecionar"] ?? null;

	function limpaTag($string){
		return strip_tags($string);
	}

	if(empty(trim($nome))){
		echo "Favor informar o nome";
	}

	// demonstração para validar apenas se o parâmetro é null
	/*if(is_null($interesses)){
		echo "Larga de ser desinteressado e escolha o seu interesse >:|";
	}*/

	
 ?>