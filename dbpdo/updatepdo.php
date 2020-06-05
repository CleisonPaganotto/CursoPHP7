<?php  

	$conn = new PDO("mysql:dbname=dbphp7; host = LocalHost", "root", "");

	$stmt = $conn->prepare("UPDATE tb_usuarios SET login = :LOGIN, senha = :SENHA WHERE idusuario = :ID"); 

	$id = 2;
	$login = "Janete";
	$senha = "Mae";

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":SENHA", $senha);
	$stmt->bindParam(":ID", $id);

	$stmt->execute();

	echo "Dados alterados com sucesso";
	

?>