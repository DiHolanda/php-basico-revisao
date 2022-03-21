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
	$frequenciaAluno = 70;

	if($mediaAluno >= $mediaMinima && 
		$frequenciaAluno >= $frequenciaMinima) {
		echo "Aluno aprovado";
	}
	else {
		echo "Aluno reprovado";
	}

	echo "\n";

	// agora avaliando um aluno da escola estadual de SP...
	if($mediaAluno >= $mediaMinima ||
		$frequenciaAluno >= $frequenciaMinima) {
		echo "Aluno aprovado em escola pública do estado de SP";
	}
	else {
		echo "Aluno reprovado, mesmo na escola pública do estado de SP";
	}


 ?>