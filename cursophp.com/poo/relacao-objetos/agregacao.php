<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo/relacao-objetos';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Agregação</h2>";

echo '

class Produtos<br>
{<br>
&emsp;public $nome;<br>
&emsp;public $valor;<br>
&emsp;function __construct($nome, $valor)<br>
&emsp;{<br>
&emsp;&emsp;$this->nome = $nome;<br>
&emsp;&emsp;$this->valor = $valor;<br>
&emsp;}<br>
}<br>
<br>
class Carrinho<br>
{<br>
&emsp;public $produtos;<br>
<br>
&emsp;public function adiciona(Produtos $produto)<br>
&emsp;{<br>
&emsp;&emsp;$this->produtos[] = $produto;<br>
&emsp;}<br>
<br>
&emsp;public function exibe()<br>
&emsp;{<br>
&emsp;&emsp;foreach ($this->produtos as $produto)<br>
&emsp;&emsp;{<br>
&emsp;&emsp;&emsp;echo "$produto->nome: ($produto->valor)";<br>
&emsp;&emsp;}<br>
&emsp;}&emsp;<br>
}<br>
<br>
$prod1 = new Produtos("Notebook", "1500");<br>
$prod2 = new Produtos("Mouse", "50");<br>
<br>
$carr = new Carrinho();<br>
$carr->adiciona($prod1);<br>
$carr->adiciona($prod2);<br>
$carr->exibe();<br>

<br>';

echo "<div style='color: green'>Resultado:<br>";

class Produtos
{
  public $nome;
  public $valor;
  function __construct($nome, $valor)
  {
    $this->nome = $nome;
    $this->valor = $valor;
  }
}

class Carrinho
{
  public $produtos;

  public function adiciona(Produtos $produto)
  {
    $this->produtos[] = $produto;
  }

  public function exibe()
  {
    foreach ($this->produtos as $produto)
    {
      echo "$produto->nome: ($produto->valor)<br>";
    }
  }  
}

$prod1 = new Produtos("Notebook", "1500");
$prod2 = new Produtos("Mouse", "50");

$carr = new Carrinho();
$carr->adiciona($prod1);
$carr->adiciona($prod2);
$carr->exibe();

echo "</div><br>";

?>
