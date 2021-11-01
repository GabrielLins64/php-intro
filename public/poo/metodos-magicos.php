<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Métodos Mágicos</h2>";

echo '

class Pessoa<br>
{<br>
&emsp;private $dados = array();<br>
<br>
&emsp;<span style="color: gray">// Permite setar atributos privados<br></span>
&emsp;public function __set($nome, $valor)<br>
&emsp;{<br>
&emsp;&emsp;$this->dados[$nome] = $valor;<br>
&emsp;}<br>
<br>
&emsp;<span style="color: gray">// Permite acessar atributos privados<br></span>
&emsp;public function __get($nome)<br>
&emsp;{<br>
&emsp;&emsp;return $this->dados[$nome];<br>
&emsp;}<br>
<br>
&emsp;<span style="color: gray">// Permite que uma classe decida como se comportar quando convertida para uma string.<br></span>
&emsp;public function __tostring()<br>
&emsp;{<br>
&emsp;&emsp;return "Tentei imprimir o objeto";<br>
&emsp;}<br>
<br>
&emsp;<span style="color: gray">// É chamado quando um script tenta chamar um objeto como uma função.<br></span>
&emsp;public function __invoke()<br>
&emsp;{<br>
&emsp;&emsp;return "Objeto como função";<br>
&emsp;}<br>
}<br>
<br>
$pessoa = new Pessoa();<br>
$pessoa->nome = "John";<br>
echo $pessoa->nome;<br>
$pessoa->idade = 30;<br>
echo $pessoa->idade;<br>
echo $pessoa;<br>
echo $pessoa();<br>

<br>';

echo "<div style='color: green'>Resultado:<br>";

class Pessoa
{
  private $dados = array();

  // Permite setar atributos privados
  public function __set($nome, $valor)
  {
    $this->dados[$nome] = $valor;
  }

  // Permite acessar atributos privados
  public function __get($nome)
  {
    return $this->dados[$nome];
  }

  // Permite que uma classe decida como se comportar quando convertida para uma string.
  public function __tostring()
  {
    return "Tentei imprimir o objeto";
  }

  // É chamado quando um script tenta chamar um objeto como uma função.
  public function __invoke()
  {
    return "Objeto como função";
  }
}

$pessoa = new Pessoa();
$pessoa->nome = "John";
echo $pessoa->nome."<br>";
$pessoa->idade = 30;
echo $pessoa->idade."<br>";
echo $pessoa."<br>";
echo $pessoa()."<br>";

echo "</div><br>";

?>
