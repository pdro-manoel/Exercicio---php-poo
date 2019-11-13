<?php 
	
	//Exercicio.
// Exercicio - construir as classes definir os atributos basicos e metodos basicos usando modificadores de acesso public private protected quando necessario

// Criar Classes
// Animal
// - Mamifero
// - Oviparo

//     - classificar em classes: 
//         - felinos
//         - caes
//         - humanos

	class Animal{

		private $nome;
		public $familia;

		public function __construct($nome, $familia){
				$this->nome=$nome;
				$this->familia=$familia;
			}

		public function get_nome(){
			return $this->nome;
		}

		public function get_familia(){
			return $this->familia;
		}
	}

	class Mamifero extends Animal{
		public $subFilo;

		public function subFilo($subFilo){
			$this->subFilo=$subFilo;
		}

		public function get_subFilo(){
			return $this->subFilo;
		}

	}

	class Oviparo extends Animal{
		public $filo;
		public $subFilo;

		function filo($filo, $subFilo){
			$this->filo=$filo;
			$this->subFilo=$subFilo;
		}

		function get_filo(){
			echo $this->filo;
			echo "<br>";
			echo $this->subFilo;
		}
		
	}


$cachorro = new Mamifero("Cachorro", "Canino");
$cachorro->subFilo("Placentario");

$gato = new Mamifero("Gato", "Felino");
$gato->subFilo("Placentario");

$cleytom = new Mamifero("Cleytom", "Hominídeo");
$gato->subFilo("Placentario");

$galinha = new Oviparo("Galinha", "Phasianidae");
$galinha->filo("Ave", "Domestico");


echo "Mamifero";
echo "<br>";
echo $cachorro->get_nome();
echo "<br>";
echo $cachorro->get_familia();
echo "<br>";
echo $cachorro->get_subFilo();

echo "<br><br>";

echo "Mamifero";
echo "<br>";
echo $gato->get_nome();
echo "<br>";
echo $gato->get_familia();
echo "<br>";
echo $gato->get_subFilo();

echo "<br><br>";

echo "Mamifero";
echo "<br>";
echo $cleytom->get_nome();
echo "<br>";
echo $cleytom->get_familia();
echo "<br>";
echo $cleytom->get_subFilo();

echo "<br><br>";

echo $galinha->get_nome();
echo "<br>";
echo $galinha->get_familia();
echo "<br>";
$galinha->get_filo();





?>