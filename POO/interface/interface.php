<?php  

	interface Veiculo{

		public function acelecerar($velocidade);
		public function freiar($freiar);
		public function trocaMarcha($marcha);
	}

	class Civic implements Veiculo{

		public function acelecerar($velocidade){
			echo "O veiculo acelerou até " . $velocidade . " km/h";
		}

		public function freiar($velocidade){
			echo "O veiculo desacelerou até " . $velocidade . " km/h";
		}

		public function trocaMarcha($marcha){
			echo "O veiculo trocou para a " . $marcha ." marcha";
		}

	}

	$carro = new Civic();

	$carro->trocaMarcha(5);
	echo "<br>";
	$carro->acelecerar(100);
	echo "<br>";
	$carro->freiar(80);

?>