<?php 

	$i = 0;

	// exibe apenas números pares
	while ($i < 10) {

		$i++;

		if ($i % 2 != 0) {
		
			//echo $i . "<br>";
			continue;

		}

		echo $i . "<br>";

	}

 ?>