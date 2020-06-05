<?php  

	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();

	$cad->setNome("Cleison Grahl Paganotto");
	$cad->setEmail("cleisonpaganotto2014@gmail.com");
	$cad->setSenha("Cleia1b2c3");

	$cad->registrarVenda();
?>