

<?php  
	
	$link = "https://arquivos.mentorweb.ws/imagensclientes/usj/usj_300x110.png";

	$content = file_get_contents($link);

	$parse = parse_url($link);

	$basename = basename($parse["path"]);

	$file = fopen($basename, "w+");

	fwrite($file, $content);

	fclose($file);

	$nome = "Logo USJ";

?>

<img src="<?=$basename?>">
<br>
<p><?=$nome?></p>