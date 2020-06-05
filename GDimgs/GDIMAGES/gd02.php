<?php  
	//Modificando uma imagen ja existente
	$image = imagecreatefromjpeg("original.jpg");

	//Definindo as cores que irao para a iamgem
	$titlecolor = imagecolorallocate($image, 0, 0, 0);
	$gray = imagecolorallocate($image, 100, 100, 100);

	//Defindo os textos que serão escritos na imagem
	imagestring($image, 5, 450, 150, "Certificado", $titlecolor);
	imagestring($image, 5, 440, 350, "Cleison Paganotto", $titlecolor);
	imagestring($image, 3, 440, 370, "Concluido em: " . date("d/m/Y"), $titlecolor);

	header("Content-Type: image/jpeg");

	imagejpeg($image, "Certificado-".date("Y-m-d").".jpg", 10);
	imagedestroy($image);

?>