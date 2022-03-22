<?php 

	$i = 1;

	// exibe apenas números pares
	while($i) {
		if ($i % 2 == 0) {
		
			echo $i . "<br>";

		}

		$i++;

		if($i > 10){
			break;
		}
	}

 ?>