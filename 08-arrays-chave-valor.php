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
 ?>