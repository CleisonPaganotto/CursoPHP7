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

	

	$pessoa1 = new Pessoa();

	//echo $pessoa1->pass . "<br>";

	$pessoa1->exibir();
?>