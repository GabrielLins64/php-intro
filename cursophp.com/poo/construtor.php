<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Construtor</h2>";

echo '

class Pessoa<br>
{<br>
&emsp;private $nome;<br>
&emsp;private $idade;<br>
<br>
&emsp;public function __construct($nome, $idade)<br>
&emsp;{<br>
&emsp;&emsp;$this->nome = $nome;<br>
&emsp;&emsp;$this->idade = $idade;<br>
&emsp;}<br>
<br>
&emsp;public function getNome() { return $this->nome; }<br>
&emsp;public function getIdade() { return $this->idade; }<br>
}<br>
<br>
$pessoa = new Pessoa("John", 32);<br>
echo "Nome: ".$pessoa->getNome();<br>
echo "Idade: ".$pessoa->getIdade();<br>

<br>';

echo "<div style='color: green'>Resultado:<br>";

class Pessoa
{
  private $nome;
  private $idade;

  public function __construct($nome, $idade)
  {
    $this->nome = $nome;
    $this->idade = $idade;
  }

  public function getNome() { return $this->nome; }
  public function getIdade() { return $this->idade; }
}

$pessoa = new Pessoa("John", 32);
echo "Nome: ".$pessoa->getNome()."<br>";
echo "Idade: ".$pessoa->getIdade()."<br>";

echo "</div><br>";

