<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Constantes, Self e Parent</h2>";

echo '

class Pessoa<br>
{<br>
&emsp;const nome = "Gabriel";<br>
}<br>
<br>
class Gabriel extends Pessoa<br>
{<br>
&emsp;const nome = "Lins";<br>
<br>
&emsp;public function exibirNome()<br>
&emsp;{<br>
&emsp;&emsp;echo self::nome;<br>
&emsp;}<br>
<br>
&emsp;public function exibirNomeParent()<br>
&emsp;{<br>
&emsp;&emsp;echo parent::nome;<br>
&emsp;}<br>
}<br>
<br>
$pessoa = new Gabriel();<br>
$pessoa->exibirNome();<br>
$pessoa->exibirNomeParent();<br>

<br>';

echo "<div style='color: green'>Resultado:<br>";

class Pessoa
{
  const nome = "Gabriel";
}

class Gabriel extends Pessoa
{
  const nome = "Lins";

  public function exibirNome()
  {
    echo self::nome."<br>";
  }

  public function exibirNomeParent()
  {
    echo parent::nome."<br>";
  }
}

$pessoa = new Gabriel();
$pessoa->exibirNome();
$pessoa->exibirNomeParent();

echo "</div><br>";

