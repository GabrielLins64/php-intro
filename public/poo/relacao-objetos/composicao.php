<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo/relacao-objetos';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Composição</h2>";

echo '

class Pessoa<br>
{<br>
&emsp;public function atribuiNome($nome)<br>
&emsp;{<br>
&emsp;&emsp;return "O nome da pessoa é $nome";<br>
&emsp;}<br>
}<br>
<br>
class Exibe<br>
{<br>
&emsp;public $pessoa;<br>
&emsp;public $nome;<br>
<br>
&emsp;function __construct($nome)<br>
&emsp;{<br>
&emsp;&emsp;$this->pessoa = new Pessoa();<br>
&emsp;&emsp;$this->nome = $nome;<br>
&emsp;}<br>
<br>
&emsp;public function exibeNome()<br>
&emsp;{<br>
&emsp;&emsp;echo $this->pessoa->atribuiNome($this->nome);<br>
&emsp;}<br>
}<br>
<br>
$exibe = new Exibe("Gabs");<br>
$exibe->exibeNome();<br>

<br>';

echo "<div style='color: green'>Resultado:<br>";

class Pessoa
{
  public function atribuiNome($nome)
  {
    return "O nome da pessoa é $nome";
  }
}

class Exibe
{
  public $pessoa;
  public $nome;

  function __construct($nome)
  {
    $this->pessoa = new Pessoa();
    $this->nome = $nome;
  }

  public function exibeNome()
  {
    echo $this->pessoa->atribuiNome($this->nome)."<br>";
  }
}

$exibe = new Exibe("Gabs");
$exibe->exibeNome();

echo "</div><br>";

?>
