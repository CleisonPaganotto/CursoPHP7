<?php 
	
	class Endereco{

		private $rua;
		private $numero;
		private $cidade;

		public function __construct($rua, $numero, $cidade){
			$this->rua = $rua;
			$this->numero = $numero;
			$this->cidade = $cidade;
		}

		public function __destruct(){
			var_dump("Destruir");
		}

		public function __toString(){
			return $this->rua.", ".$this->numero." - ".$this->cidade." ";
		}
	}

	$meuEnd = new Endereco("Rua Curió","291","São José / SC");

	echo $meuEnd;

	//var_dump($meuEnd);
	
	//unset($meuEnd);

?>