<?php  

	$connect = new mysqli("LocalHost", "root", "", "dbphp7");

	if ($connect->connect_error) {
		echo "Error: " . $connect->connect_error;	
	}

	$result = $connect->query("SELECT * FROM tb_usuarios ORDER BY login");

	$json = array();

	while($row = $result->fetch_array(MYSQLI_ASSOC)){
		//var_dump($row);
		array_push($json, $row);
	}

	echo json_encode($json);

?>