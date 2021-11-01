<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo/relacao-objetos';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Associação</h2>";

echo '
class Pedido<br>
{<br>
&emsp;public $numero;<br>
&emsp;public $cliente;<br>
}<br>
<br>
class Cliente<br>
{<br>
&emsp;public $nome;<br>
&emsp;public $endereco;<br>
&emsp;public function __construct($nome, $end)<br>
&emsp;{<br>
&emsp;&emsp;$this->nome = $nome;<br>
&emsp;&emsp;$this->endereco = $end;<br>
&emsp;}<br>
}<br>
<br>
$cliente = new Cliente("Gabriel Lins", "Rua 2");<br>
$pedido = new Pedido();<br>
$pedido->numero = "123";<br>
$pedido->cliente = $cliente;<br>
<br>
$dados = array<br>
(<br>
&emsp;"numero" => $pedido->numero,<br>
&emsp;"nome_cliente" => $pedido->cliente->nome,<br>
&emsp;"endereco_cliente" => $pedido->cliente->endereco,<br>
);<br>
<br>
var_dump($dados);<br>

<br>';

echo "<div style='color: green'>Resultado:<br>";

class Pedido
{
  public $numero;
  public $cliente;
}

class Cliente
{
  public $nome;
  public $endereco;
  public function __construct($nome, $end)
  {
    $this->nome = $nome;
    $this->endereco = $end;
  }
}

$cliente = new Cliente("Gabriel Lins", "Rua 2");
$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente;

$dados = array
(
  "numero" => $pedido->numero,
  "nome_cliente" => $pedido->cliente->nome,
  "endereco_cliente" => $pedido->cliente->endereco,
);

var_dump($dados);

echo "</div><br>";

?>
