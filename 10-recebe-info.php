<?php 

	// a variável GET é um array que coleta valores passados na url da página
	// exemplo: http://localhost:8000/10-recebe-info.php?nome=Di&sobrenome=Holanda
	//var_dump($_GET);
 ?>

 <h1> <?php 
 			echo $_GET["nome"] . " " .
 			$_GET["sobrenome"];
 		 ?> </h1>