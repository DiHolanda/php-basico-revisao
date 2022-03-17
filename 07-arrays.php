<?php 
	
	// declara uma variável que será um array
	$vetor = array();

	// com array vazio, o echo exibirá um alerta e que a variável é do tipo array
	echo $vetor;

	// atribui valores para o array
	$vetor = array(20, 40, 50, "Di Holanda", true);

	/* outr forma de declarar os valores em arrays
	é em várias linhas
	delimitando cada valor com , */
	$vetor = array(
		50,
		"Di Holanda",
		true
	);

	echo "\n";

	// mas mesmo assim dá o alerta e exibe apenas que variável é do tipo array
	echo $vetor;

	echo  "\n";

	// para exibir um valor dentro do array, precisa informar qual a posição do valor a ser mostrado
	echo $vetor[0]; // lembrando que a posição começa a partir do zero

	echo "\n";

	// atribui valores num array e exibe um valor na mesma linha de comando
	echo $vetorInvocado = array(false, false, true)[2];

	// atribuição limpa em array
	// em vez de declarar a função array para então inserir os valores
	// já os insere diretamente entre colchetes
	$vetorLimpo = [1, 2, 3, 5];

	echo "\n";
	echo $vetorLimpo[3];

 ?>