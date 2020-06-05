<?php  

		//Modificando uma imagen ja existente
	$image = imagecreatefromjpeg("original.jpg");

	//Definindo as cores que irao para a iamgem
	$titlecolor = imagecolorallocate($image, 0, 0, 0);
	$gray = imagecolorallocate($image, 100, 100, 100);

	//Defindo os textos que serão escritos na imagem com fontes personalizadas
	imagettftext($image, 32, 0, 320, 250, $titlecolor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "Certificado");
	imagettftext($image, 32, 0, 375, 350, $titlecolor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Cleison Paganotto");
	
	imagestring($image, 3, 440, 370, "Concluido em: " . date("d/m/Y"), $titlecolor);

	header("Content-Type: image/jpeg");

	imagejpeg($image);
	imagedestroy($image);

?>

?>