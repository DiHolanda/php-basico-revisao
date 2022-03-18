<?php 
	/* definição de chaves em um array PHP
		A posição correspondente a cada valor de um array em PHP é chamada de chave
		Que por padrão é uma sequência numérica a partir do zero
		Mas dá para definir as chaves em array no PHP
	*/
	// as chaves por padrão em arrays seria assim:
	$arraysChavesPadrao = array(
		0 => 150,
		1 => "Di Holanda",
		2 => true
	);

	echo $arraysChavesPadrao[1];

	// exemplo de chaves personalizadas
	$arraysChavesPersonalizadas = array(
		1 => 417,
		"nome" => "Di Holanda",
		"homem?" => true
	);

	echo "\n";
	echo $arraysChavesPersonalizadas["homem?"];

	// misto de chaves personalizadas e automáticas
	$arrayChavesMisturadas = array(
		"mulher?" => false,
		"Di Holanda",
		12 => 28,
		1993
	); // no valor "Di Holanda", a chave será 0, mas no valor 1993, a chave será 13, número seguinte ao 12, que é a chave anterior

	echo "\n";

	// var_dump destrincha a composição da variável passada
	echo var_dump($arrayChavesMisturadas);
 ?>