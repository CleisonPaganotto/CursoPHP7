<?php

	class Pessoa{

		public $nome = "Cleison Grahl Paganotto";
		protected $idade = 21;
		private $pass = "1234";

		public function exibir(){

			echo $this->nome . "<br>";
			echo $this->idade . "<br>";
			echo $this->pass . "<br>";

		}


	}

	class Programador extends Pessoa {

		public function exibir(){

			echo get_class($this) . "<br>"; 

			echo $this->nome . "<br>";
			echo $this->idade . "<br>";
			echo $this->pass . "<br>";

		}


	}

	$programador01 = new Programador();

	//echo $pessoa1->pass . "<br>";

	$programador01->exibir();
?>