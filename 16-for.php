<?php 

	$i = 0;
	$tabuada = 1;

	/*for($i; $tabuada <= 10; $i++) {
		
		echo $tabuada . " x " .
			$i . " = " .
			($tabuada * $i) . "<br />";

		// ao calcular o 10 da tabuada atual, faz a tabuada do número seguinte
		if($i == 10) {
			echo "<br /> <hr /> <br />";
			$i = 0;
			$tabuada++;
		}
	}*/

	$feira = [
		"Manga",
		"Caqui",
		"Mamão",
		"Abacate",
		"Pera",
		"Banana"
	];

	echo "Eu quero: ";

	// laço para passar por todas as posições de um array
	for($i = 0; $i < count($feira); $i++){
		if($i == count($feira)-1){
			echo $feira[$i];
			continue;
		}
		echo $feira[$i] . ", ";
	}

 ?>