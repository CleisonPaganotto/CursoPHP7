<?php  

	$conn = new PDO("mysql:dbname=dbphp7; host = LocalHost", "root", "");

	$stmt = $conn->prepare("INSERT INTO tb_usuarios(login, senha) VALUES(:LOGIN, :SENHA)");

	$login = "Cleison";

	$senha = "Cleison";

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":SENHA", $senha);

	$stmt->execute();

	echo "Dados inseridos com sucesso";
	

?>