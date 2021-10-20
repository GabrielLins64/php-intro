<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Abstração</h2>";

echo '

<span style="color: gray">// Classes abstratas não podem ser instanciadas. São apenas modelos para classes herdeiras.</span><br>
abstract class Banco<br>
{<br>
&emsp;protected $saldo;<br>
&emsp;protected $limiteSaque;<br>
&emsp;protected $juros;<br>
<br>
&emsp;public function getSaldo() { return $this->saldo; }<br>
<br>
&emsp;<span style="color: gray">// Funções abstratas tornam obrigatória suas definições em classes herdeiras.</span><br>
&emsp;abstract protected function sacar($valor);<br>
&emsp;abstract protected function depositar($valor);<br>
}<br>
<br>
class BancoGold extends Banco<br>
{<br>
&emsp;public function verSaldo()<br>
&emsp;{<br>
&emsp;&emsp;echo "Saldo: ".$this->getSaldo();<br>
&emsp;}<br>
<br>
&emsp;public function sacar($valor) { $this->saldo -= $valor; }<br>
&emsp;public function depositar($valor) { $this->saldo += $valor; }<br>
}<br>
<br>
$conta = new BancoGold();<br>
$conta->depositar(500);<br>
$conta->verSaldo();<br>
$conta->sacar(450);<br>
$conta->verSaldo();<br>

<br>';

echo "<div style='color: green'>Resultado:<br>";

// Classes abstratas não podem ser instanciadas. São apenas modelos para classes herdeiras.
abstract class Banco
{
  protected $saldo;
  protected $limiteSaque;
  protected $juros;

  public function getSaldo() { return $this->saldo; }

  // Funções abstratas tornam obrigatória suas definições em classes herdeiras.
  abstract protected function sacar($valor);
  abstract protected function depositar($valor);
}

class BancoGold extends Banco
{
  public function verSaldo()
  {
    echo "Saldo: ".$this->getSaldo()."<br>";
  }

  public function sacar($valor) { $this->saldo -= $valor; }
  public function depositar($valor) { $this->saldo += $valor; }
}

$conta = new BancoGold();
$conta->depositar(500);
$conta->verSaldo();
$conta->sacar(450);
$conta->verSaldo();

echo "</div><br>";

