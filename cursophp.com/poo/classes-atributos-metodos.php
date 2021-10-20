<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Classes, Atributos e Métodos</h2>";

echo "<hr><h3>Subtítulo1</h3>";

echo '
class Robo<br>
{<br>
&emsp;public $id;<br>
&emsp;public $cor;<br>
<br>
&emsp;public function falar()<br>
&emsp;{<br>
&emsp;&emsp;echo "Robô ".$this->id." (".$this->cor."): Hello World!";<br>
&emsp;}<br>
}<br>
<br>
$robo = new Robo();<br>
$robo->id = 1;<br>
$robo->cor = "Prata";<br>
$robo->falar();<br>
<br>';

echo "<div style='color: green'>Resultado:<br>";
class Robo
{
  public $id;
  public $cor;

  public function falar()
  {
    echo "Robô ".$this->id." (".$this->cor."): Hello World!<br>";
  }
}

$robo = new Robo();
$robo->id = 1;
$robo->cor = "Prata";
$robo->falar();

echo "</div><br>";

