<?php 
	
	class Pessoa{

		public $nome; //Atributo

		public function falar(){//Método

			return "O meu nome é ".$this->nome;

		}

	}

	$cleison = new Pessoa();

	$cleison->nome = "Cleison Paganotto";

	echo $cleison->falar();

?>