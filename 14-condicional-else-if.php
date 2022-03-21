<?php 

	$mediaMinima = 7;
	$mediaRecuperacao = 5;
	$frequenciaMinima = 70;

	$mediaAluno = 5;
	$frequenciaAluno = 75;

	$reprovadoPorFaltas = $frequenciaAluno < $frequenciaMinima ?
			true : false;

	if(!$reprovadoPorFaltas) {

		if($mediaAluno < $mediaRecuperacao) {
			echo "Aluno reprovado";
		}
		else if($mediaAluno < $mediaMinima) {
			echo "Aluno em recuperação";
		}
		else {
			echo "Aluno aprovado";
		}

	}
	else {
		echo "Aluno reprovado";
	}

 ?>