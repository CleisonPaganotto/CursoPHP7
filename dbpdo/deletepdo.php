<?php  

	$conn = new PDO("mysql:dbname=dbphp7; host = LocalHost", "root", "");

	$stmt = $conn->prepare("DELETE FROM  tb_usuarios  WHERE idusuario = :ID"); 

	$id = 3;
	//$login = "Janete";
	//$senha = "Mae";

	//$stmt->bindParam(":LOGIN", $login);
	//$stmt->bindParam(":SENHA", $senha);
	$stmt->bindParam(":ID", $id);

	$stmt->execute();

	echo "Dados Deletados com sucesso";
	

?>