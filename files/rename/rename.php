<?php  

	$dir1 = "pasta01";
	$dir2 = "pasta02";

	if (!is_dir($dir1)) mkdir($dir1);
	if (!is_dir($dir2)) mkdir($dir2);

	$filename = "READEME.txt";

	if (!file_exists($dir1.DIRECTORY_SEPARATOR.$filename)) {
		$file = fopen($dir1.DIRECTORY_SEPARATOR.$filename, "w+");
		fwrite($file, date("Y-m-d H:i:s"));
		fclose($file);
	}

	rename(
		//Origem
		$dir1.DIRECTORY_SEPARATOR.$filename,
		//Destino
		$dir2.DIRECTORY_SEPARATOR.$filename
	);

	echo "Arquivo movido com sucesso";

?>