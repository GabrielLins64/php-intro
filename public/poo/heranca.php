<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Herança</h2>";

echo '

class Veiculo<br>
{<br>
&emsp;private $modelo;<br>
&emsp;private $cor;<br>
<br>
&emsp;public function getModelo() { return $this->modelo; }<br>
&emsp;public function getCor() { return $this->cor; }<br>
&emsp;public function setModelo($value) { $this->modelo = $value; }<br>
&emsp;public function setCor($value) { $this->cor = $value; }<br>
<br>
&emsp;public function andar()<br>
&emsp;{<br>
&emsp;&emsp;echo "$this->modelo $this->cor andou!";<br>
&emsp;}<br>
<br>
&emsp;public function parar()<br>
&emsp;{<br>
&emsp;&emsp;echo "$this->modelo $this->cor parou!";<br>
&emsp;}<br>
}<br>
<br>
class Carro extends Veiculo<br>
{<br>
&emsp;public function ligarLimpador()<br>
&emsp;{<br>
&emsp;&emsp;echo "Limpando o para-brisa!";<br>
&emsp;}<br>
}<br>
<br>
class Moto extends Veiculo<br>
{<br>
&emsp;public function darGrau()<br>
&emsp;{<br>
&emsp;&emsp;echo "Dando grau!";<br>
&emsp;}<br>
}<br>
<br>
$carro = new Carro();<br>
$carro->setModelo("Kwid");<br>
$carro->setCor("Prata");<br>
$carro->andar();<br>
$carro->ligarLimpador();<br>
$carro->parar();<br>
<br>
$moto = new Moto();<br>
$moto->setModelo("Yamaha");<br>
$moto->setCor("Azul");<br>
$moto->andar();<br>
$moto->darGrau();<br>
$moto->parar();<br>

<br>';

echo "<div style='color: green'>Resultado:<br>";

class Veiculo
{
  private $modelo;
  private $cor;

  public function getModelo() { return $this->modelo; }
  public function getCor() { return $this->cor; }
  public function setModelo($value) { $this->modelo = $value; }
  public function setCor($value) { $this->cor = $value; }

  public function andar()
  {
    echo "$this->modelo $this->cor andou!<br>";
  }

  public function parar()
  {
    echo "$this->modelo $this->cor parou!<br>";
  }
}

class Carro extends Veiculo
{
  public function ligarLimpador()
  {
    echo "Limpando o para-brisa!<br>";
  }
}

class Moto extends Veiculo
{
  public function darGrau()
  {
    echo "Dando grau!<br>";
  }
}

$carro = new Carro();
$carro->setModelo("Kwid");
$carro->setCor("Prata");
$carro->andar();
$carro->ligarLimpador();
$carro->parar();

$moto = new Moto();
$moto->setModelo("Yamaha");
$moto->setCor("Azul");
$moto->andar();
$moto->darGrau();
$moto->parar();

echo "</div><br>";

