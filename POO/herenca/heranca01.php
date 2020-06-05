<?php  

	class Documento{

		private $numero;

		public function getNumero(){
			return $this->numero;
		}

		public function setNumero($numero){
			$this->numero = $numero;
		}

	}

	class CPF extends Documento{

		public function validarCPF():bool{
			
			//Valida CPF

			return true;
		}

	}


	$doc = new CPF();

	$doc->setNumero("10987807951");

	var_dump($doc->validarCPF());

	echo "<br>";

	echo $doc->getNumero();


?>