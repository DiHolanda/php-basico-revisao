<?php 

	$mediaMinima = 7;
	$mediaRecuperacao = 5;
	$frequenciaMinima = 70;

	$mediaAluno = 5;
	$frequenciaAluno = 75;

	$reprovadoPorFaltas = $frequenciaAluno < $frequenciaMinima ?
			true : false;

	echo var_dump($reprovadoPorFaltas);

 ?>