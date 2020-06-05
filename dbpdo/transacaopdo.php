<?php  

	$conn = new PDO("mysql:dbname=dbphp7; host = LocalHost", "root", "");

	$conn->beginTransaction();

	$stmt = $conn->prepare("DELETE FROM  tb_usuarios  WHERE idusuario = ?"); 

	$id = 1;

	$stmt->execute(array($id));

	//$conn->rollback();
	$conn->commit();

	echo "Confirmou o Delete";
	

?>