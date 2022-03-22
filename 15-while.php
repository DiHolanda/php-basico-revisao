<?php 

	$i = 0;
	$tabuada = 8;
	// exibe apenas números pares
	/*while ($i < 10) {

		$i++;

		if ($i % 2 = 0) {
		
			//echo $i . "<br>";
			continue;

		}

		echo $i . "<br>";

	}*/
	// calcula a tabuada de $tabuada até 10
	while($i <= 10)	{
		echo $tabuada . " x " 
		. $i . " = " .
		$tabuada * $i . "<br />";

		$i++;
	}

 ?>