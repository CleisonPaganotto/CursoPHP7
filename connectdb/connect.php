<?php  

	$connect = new mysqli("LocalHost", "root", "", "dbphp7");

	if ($connect->connect_error) {
		echo "Error: " . $connect->connect_error;	
	}

	$stmt = $connect->prepare("INSERT INTO tb_usuarios (login, senha) VALUES(?, ?)");

	$stmt->bind_param("ss", $login, $pass);

	$login = "CleisonLindao";
	$pass = "32579778";

	$stmt->execute();


?>