<?php  

	$imgs = scandir("img");
	
	$data = array();

	foreach ($imgs as $img) {
		if (!in_array($img, array(".", ".."))) {
			$filename = "img".DIRECTORY_SEPARATOR . $img;

			$info = pathinfo($filename);

			$info["size"] = filesize($filename);
			$info["modificação"] = date("d/m/Y H:i", filemtime($filename));
			$info["url"] = "http://localhost/DIR/".str_replace("\\", "/", $filename);

			array_push($data, $info);
		}
	}

	echo json_encode($data);
?>