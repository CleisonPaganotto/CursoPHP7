<?php  

	abstract class Animal{

		public function falar(){
			return "Som";
		}

		public function mover(){
			return "Anda";
		}	

	}

	class Cachorro extends Animal{
		
		public function falar(){
			return "Latir";
		}

	}

	class Gato extends Animal{
		public function falar(){
			return "Mia";
		}

	}

	class Passaro extends Animal{

		public function falar(){
			return "Canta";
		}

		public function mover(){
			return "Voar e " . parent::mover();
		}
	}

	$pluto = new Cachorro();

	echo $pluto->falar() . "<br>";
	echo $pluto->mover() . "<br>";

	echo "-----------------------------------" . "<br>";

	$garfild = new Gato();

	echo $garfild->falar() . "<br>";
	echo $garfild->mover() . "<br>";

	echo "-----------------------------------" . "<br>";

	$curio = new Passaro();

	echo $curio->falar() . "<br>";
	echo $curio->mover() . "<br>";

?>