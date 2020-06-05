<?php  

	if (!is_dir("imgs")) mkdir("imgs");

	foreach (scandir("imgs") as $item) {
		if (!in_array($item, array(".", ".."))) {

			unlink("imgs/" . $item);

		}
	}

	echo "Arquivo removido da pasta";
?>