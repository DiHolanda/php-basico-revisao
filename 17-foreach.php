<?php 

	$planetas = [
		"Mercúrio",
		"Vênus",
		"Terra",
		"Marte",
		"Júpiter",
		"Saturno",
		"Urano",
		"Netuno"
		];

	$tempo = hrtime(true);
	$tempoDestruicao = 0;

	foreach($planetas as $planeta){
		$tempoDestruicao = (int) round((hrtime(true) - $tempo) / 1000) - $tempoDestruicao;
		
		echo "O Destruidor de Planetas destruiu " . $planeta . 
		" em " . $tempoDestruicao . " anos <br />";
	}

 ?>