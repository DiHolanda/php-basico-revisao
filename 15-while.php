<?php 

	$i = 0;

	// exibe apenas números pares
	do {

		$i++;

		if ($i % 2 == 0) {
		
			//echo $i . "<br>";
			continue;

		}

		echo $i . "<br>";

	}while($i < 10);

 ?>