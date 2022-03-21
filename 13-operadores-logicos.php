<?php 

	$domingo = true;
	$diaQuente = true;

	// exemplo simples com booleans
	if ($domingo && $diaQuente) {
		echo "Vou dar banho no Het :D";
	}
	else {
		echo "Não vou dar banho no Het :(";
	}

	echo "\n";

	// duas comparações síncronas
	$mediaMinima = 7;
	$frequenciaMinima = 75;

	$mediaAluno = 3;
	$frequenciaAluno = 50;

	if($mediaAluno >= $mediaMinima && 
		$frequenciaAluno >= $frequenciaMinima) {
		echo "Aluno aprovado";
	}
	else {
		echo "Aluno reprovado";
	}

 ?>