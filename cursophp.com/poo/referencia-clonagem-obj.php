<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Referência e Clonagem de Objetos</h2>";

echo '
<br>
class Pessoa<br>
{<br>
&emsp;public $idade;<br>
<br>
&emsp;public function __construct($idade)<br>
&emsp;{<br>
&emsp;&emsp;$this->idade = $idade;<br>
&emsp;}<br>
<br>
&emsp;<span style="color: gray">// O método built-in __clone é chamado sempre que um objeto é clonado.<br></span>
&emsp;public function __clone()<br>
&emsp;{<br>
&emsp;&emsp;echo "Clonagem de objetos";<br>
&emsp;}<br>
}<br>
<br>
$pessoa = new Pessoa(25);<br>
<br>
<span style="color: gray">// pessoa2 é um objeto que referencia o objeto pessoa<br></span>
$pessoa2 = $pessoa;<br>
$pessoa2->idade = 35;<br>
<br>
echo $pessoa->idade;<br>
<br>
<span style="color: gray">// pessoa3 é um clone do objeto pessoa. Não o referencia.<br></span>
$pessoa3 = clone $pessoa;<br>
$pessoa3->idade = 45;<br>
<br>
echo $pessoa->idade;<br>

<br>';

echo "<div style='color: green'>Resultado:<br>";

class Pessoa
{
  public $idade;

  public function __construct($idade)
  {
    $this->idade = $idade;
  }

  // O método built-in __clone é chamado sempre que um objeto é clonado.
  public function __clone()
  {
    echo "Clonagem de objetos<br>";
  }
}

$pessoa = new Pessoa(25);

// pessoa2 é um objeto que referencia o objeto pessoa
$pessoa2 = $pessoa;
$pessoa2->idade = 35;

echo $pessoa->idade."<br>";

// pessoa3 é um clone do objeto pessoa. Não o referencia.
$pessoa3 = clone $pessoa;
$pessoa3->idade = 45;

echo $pessoa->idade."<br>";

echo "</div><br>";

?>
