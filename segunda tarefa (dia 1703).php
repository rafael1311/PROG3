	<?php
	class Carro{
	public $modelo;
	public $potencia_motor;
	public $velocidade;
		
	public function getmodelo(){
		return $this->modelo;
	}
	public function getpotmot(){
	return $this->potencia_motor;
	}
	public function getvelocidade(){
	return $this->velocidade;
	}
	public function ligarCarro(){
		echo "Carro ligado";
		echo "<br>";
	}
	public function desligarCarro(){
		echo "Carro desligado";
		echo "<br>";
	}
	public function acelerar(){
		echo "Acelerando...";
		echo "</br>";
		$velocidade = 80;
		echo 'Velocidade = ' . $velocidade . 'km/h';
		echo "<br>";
	}
	public function reduzir(){
		echo 'Reduzindo velocidade';
		echo '<br>';
		$velocidade = 40;
		echo 'Velocidade = ' . $velocidade . 'km/h';
		echo '<br>';
	}
	public function pararCarro(){
		echo "Carro Parado";
		$velocidade = 0;
		echo '<br>';
		echo "Velocidade= ". $velocidade . 'km/h';
		echo '<br>';
		echo "Carro Desligado";
	}
	public function mostraProduto(){
			echo 'Dados do Carro';
			echo '<br>';
			echo 'Modelo: '. $this -> getmodelo();
			echo '<br>';
			echo 'Pot. do motor(cv): '.  $this -> getpotmot();
			echo "<br>";
			echo "<br>";
		
		
		}
}
$carro = new Carro();
$carro -> modelo = "X100";
$carro -> potencia_motor = "173";
echo $carro -> mostraProduto();
echo $carro -> ligarCarro();
echo $carro -> acelerar();
echo $carro -> reduzir();
echo $carro -> pararCarro();
?>