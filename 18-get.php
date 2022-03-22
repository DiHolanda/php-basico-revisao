<?php 

	// coalesce
	// simplica o ternário para validar uma entrada de dado
	$planeta = $_GET["planeta"] ?? false;

	if($planeta) {
		echo "O Destruidor de Planetas destruirá " . $planeta;
	}
	else {
		echo "O Destruidor de Planetas planeja o seu próximo ataque...";
	}

 ?>