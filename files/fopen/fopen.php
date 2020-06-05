<?php  
	
	$file =fopen("log.txt", "a+");

	fwrite($file, "Ultima edição feita em: ".date("Y-m-d")." ás ". date("H:i:s")." horas"."\r\n");

	fclose($file);

	echo "Arquivo criado";



?>