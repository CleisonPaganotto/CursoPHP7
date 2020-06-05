<form method="POST" enctype="multipart/form-data">
	<input type="file" name="fileUpload"><br>
	<button type="submit">Enviar</button>
</form>

<?php  
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$file = $_FILES["fileUpload"];

		if ($file["Error"]) {
			throw new Exception("Error: ".$file["Error"]);
		}

		$dirUp = "uploads";

		if (!is_dir($dirUp)) {
			mkdir($dirUp);
		}

		if (move_uploaded_file($file["tmp_name"], $dirUp . DIRECTORY_SEPARATOR . $file["name"])) {
			
			echo "Upload realizado com sucesso";

		}else {
			throw new Exception("Não foi possivel fazer o Upload");
			
		}

	}
?>