<?php  

	interface Veiculo{

		public function acelerar($velocidade);
		public function freiar($freiar);
		public function trocaMarcha($marcha);
	}

	 abstract class Automovel implements Veiculo{

		public function acelerar($velocidade){
			echo "O veiculo acelerou até " . $velocidade . " km/h";
		}

		public function freiar($velocidade){
			echo "O veiculo desacelerou até " . $velocidade . " km/h";
		}

		public function trocaMarcha($marcha){
			echo "O veiculo trocou para a " . $marcha ." marcha";
		}

	}

?>