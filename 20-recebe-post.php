<?php 

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$interesses = $_POST["interesse"];
	$onde_conheceu = $_POST["onde_conheceu"];
	$mensagem = $_POST["mensagem"];
	$redirecionar = $_POST["redirecionar"];

	echo "<strong> Nome: </strong> " . $nome . "<br>";
	echo "<strong> Email: </strong> " . $email . "<br>";
	echo "<strong> Interesses: </strong> <ul> ";
	foreach ($interesses as $interesse){
		echo " <li> " . $interesse . " </li> ";
	}
	echo "</ul>";
	
	echo "<strong> Onde Conheceu: </strong> " . $onde_conheceu . "<br>";
	echo "<strong> Mensagem: </strong> " . $mensagem . "<br>";
	echo "<strong> Redirecionar para: </strong> " . $redirecionar . "<br>";
	

 ?>