<?php
/*Para cada produto informado (nome, preço e quantidade), escreva o nome do produto comprado e o valor
total a ser pago, considerando que são oferecidos descontos pelo número de unidades compradas,
segundo a tabela abaixo: 

• Até 10 unidades: valor total 
• de 11 a 20 unidades: 10% de desconto 
• de 21 a 50 unidades: 20% de desconto
• acima de 50 unidades: 25% de desconto
*/
class Produto{
	public $nome;
	public $preco;
    public $quantidade;
    public $valor_total;

public function getNome($nome){
    return $this -> nome = $nome;
}
public function getPreco($preco){
    return $this -> preco = $preco;
}
public function getQtd($quantidade){
    return $this -> quantidade = $quantidade;
}
public function calcValor($preco, $quantidade){
    $valor_total = $preco * $quantidade;
    if ($quantidade > 10 and $quantidade <= 20){
      $percentual = $valor_total / 10;
      $valor_total = $valor_total - $percentual;
    }
    if ($quantidade > 20 and $quantidade <= 50){
        $percentual = $valor_total / 20;
        $valor_total = $valor_total - $percentual;
    }
    if ($quantidade > 50){
        $percentual = $valor_total / 25;
        $valor_total = $valor_total - $percentual;
    }
return $this->valor_total = $valor_total;
}
public function mostraProduto(){
    echo 'Nome do produto: ' . $this ->nome;
    echo '<br>';
    echo 'Valor calculado: ' . $this->valor_total;
}
}
//produto teste
$produt = new Produto();
$produt -> nome = "arroz";
$produt -> preco = 10;
$produt -> quantidade = 11;
$produt -> calcValor($produt -> preco, $produt-> quantidade);
echo $produt -> mostraProduto();
?>  