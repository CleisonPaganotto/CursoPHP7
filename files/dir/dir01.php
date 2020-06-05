<?php  
	
	$name = "img";

	if (!is_dir($name)) {

		mkdir($name);
		echo "Diretorio $name criado com sucesso";
	}else{
		//rmdir($name);
		echo "Ja existe este diretorio: $name foi removido";
	}

	

?>