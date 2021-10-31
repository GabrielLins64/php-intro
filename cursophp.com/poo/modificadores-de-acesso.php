<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Modificadores de Acesso</h2>";

echo '

class Veiculo<br>
{<br>
&emsp;<span style="color: gray">// A cor é public. Portanto, pode ser acessada de fora da classe<br></span>
&emsp;public $cor;<br>
&emsp;<span style="color: gray">// O modelo é protected. Portanto, só é acessado através de métodos public de classes filhas<br></span>
&emsp;protected $modelo;<br>
&emsp;<span style="color: gray">// O ano é private. Portanto, só pode ser acessado através de métodos public desta classe (não de filhas).<br></span>
&emsp;private $ano;<br>
<br>
&emsp;public function setAno($value) { $this->ano = $value; }<br>
&emsp;public function getAno() { return $this->ano; }<br>
}<br>
<br>
class Carro extends Veiculo<br>
{<br>
&emsp;public function getModelo() { return $this->modelo; }<br>
&emsp;public function setModelo($value) { $this->modelo = $value; }<br>
}<br>
<br>
$carro = new Carro();<br>
$carro->cor = "Prata";<br>
$carro->setModelo("Kwid");<br>
$carro->setAno("2021");<br>
<br>
echo "Cor: ". $carro->cor;<br>
echo "Modelo: ". $carro->getModelo();<br>
echo "Ano: ". $carro->getAno();<br>
<br>
var_dump($carro);<br>

<br>';

echo "<div style='color: green'>Resultado:<br>";

class Veiculo
{
  // A cor é public. Portanto, pode ser acessada de fora da classe
  public $cor;
  // O modelo é protected. Portanto, só é acessado através de métodos public de classes filhas
  protected $modelo;
  // O ano é private. Portanto, só pode ser acessado através de métodos public desta classe (não de filhas).
  private $ano;

  public function setAno($value) { $this->ano = $value; }
  public function getAno() { return $this->ano; }
}

class Carro extends Veiculo
{
  public function getModelo() { return $this->modelo; }
  public function setModelo($value) { $this->modelo = $value; }
}

$carro = new Carro();
$carro->cor = "Prata";
$carro->setModelo("Kwid");
$carro->setAno("2021");

echo "Cor: ". $carro->cor ."<br>";
echo "Modelo: ". $carro->getModelo() ."<br>";
echo "Ano: ". $carro->getAno() ."<br><br>";

var_dump($carro);

echo "</div><br>";

