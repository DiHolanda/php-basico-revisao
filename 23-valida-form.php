<?php 

	$nome = limpatag($_POST["nome"]);
	$email = limpatag($_POST["email"]);
	$interesses = $_POST["interesse"] ?? $_POST["interesse"] = [""];
	$onde_conheceu = $_POST["onde_conheceu"];
	$mensagem = limpatag($_POST["mensagem"]);
	$redirecionar = $_POST["redirecionar"] ?? "";

	function limpaTag($string){
		return strip_tags($string);
	}


	function validaCampo($campo){
		if(empty(trim($campo))){
			return "Favor preencher o campo";
		}
		else {
			return $campo;
		}

	}

	echo "<strong> Nome: </strong> " . validaCampo($nome) . "<br>";
	echo "<strong> Email: </strong> " . validaCampo($email) . "<br>";
	echo "<strong> Interesses: </strong> <ul> ";
	foreach ($interesses as $interesse){
		echo " <li> " . validaCampo($interesse) . " </li> ";
	}
	echo "</ul>";
	
	echo "<strong> Onde Conheceu: </strong> " . validaCampo($onde_conheceu) . "<br>";
	echo "<strong> Mensagem: </strong> " . validaCampo($mensagem) . "<br>";
	echo "<strong> Redirecionar para: </strong> " . validaCampo($redirecionar) . "<br>";

	// demonstração para validar apenas se o parâmetro é null
	/*if(is_null($interesses)){
		echo "Larga de ser desinteressado e escolha o seu interesse >:|";
	}*/

	
 ?>