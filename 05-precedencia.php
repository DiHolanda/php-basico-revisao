<?php 
	// o código é avaliado da esquerda para a direita
	// para então ser executado conforme a precedência de cada operador
	// no caso abaixo, a ordem de execução dos operadores será de * -> + -> =
	$soma = 5 + 3 * 8;

	//ao lidar com strings, o precedente prioriza a concatenação
	// e depois atribui o valor
	$string = "Di " . "Holanda";

	echo $string;

	echo "\n";

	// a ordem dos operadores também é respeitada quando há um comando php à esquerda, mas se executa primeiro o que está à direita do mesmo
	echo 5 + 3 * 8;

	echo "\n";

	// e é possível manipular a ordem dos operadores aritméticos posicionando parênteses
	echo (5 + 3 * 5) * 8;
 ?>