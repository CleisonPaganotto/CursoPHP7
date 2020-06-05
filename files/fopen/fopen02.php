<?php  

	require_once("config.php");

	$sql = new Sql();

	$user = $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario");

	$headers = array();

	foreach ($user[0] as $key => $value) {
		array_push($headers, ucfirst($key));
	}

	$file = fopen("users.csv" , "w+");

	fwrite($file, implode(", ", $headers). "\r\n");

	foreach ($user as $row) {

		$data = array();

		foreach ($row as $key => $value) {

			array_push($data, $value);

		}//termido do foreach de coluna

		fwrite($file, implode(", ", $data). "\r\n");
		
	}//end do foreach de linha

	fclose($file);

	


?>