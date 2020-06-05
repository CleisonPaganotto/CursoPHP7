<?php 

	function includClass($nomeClass){
		if (file_exists($nomeClass . ".php")===true) {
			require_once($nomeClass . ".php");
		}

	}

	spl_autoload_register("includClass");

	spl_autoload_register(function($nomeclass){
		if (file_exists("Abstratas" . DIRECTORY_SEPARATOR.  $nomeClass . ".php")===true) {
			require_once("Abstratas" . DIRECTORY_SEPARATOR.  $nomeClass . ".php");
		}

	});


	$carro = new delRey();
	
	$carro->acelerar(150);
	

?>