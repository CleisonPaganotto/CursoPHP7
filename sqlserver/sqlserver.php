<?php  
	$conn = new PDO("sqlsrv:DataBase=dbphp7; server = localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

	$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY login");

	$stmt->execute();

	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach ($results as $row) {
		foreach ($row as $key => $value) {
			echo "<strong>" . $key . ": </strong>" .$value. "<br>";
		}
		echo "<hr>";
	}



?>