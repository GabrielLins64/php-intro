<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Constantes, Self e Parent</h2>";

echo '

class Pessoa<br>
{<br>
&emsp;<span style="color: gray">// É possível definir valores constantes em cada classe permanecendo a mesma e imutável.<br></span>
&emsp;<span style="color: gray">// Constantes diferem de variáveis normais, ao não usar o símbolo $ para declará-las ou usá-las. A visibilidade padrão de constantes de classe é public.<br></span>
&emsp;<span style="color: gray">// O valor deve ser uma expressão constante, não podendo ser (por exemplo) uma variável, uma propriedade, ou uma chamada a uma função.<br></span>
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
  // É possível definir valores constantes em cada classe permanecendo a mesma e imutável. Constantes diferem de variáveis normais, ao não usar o símbolo $ para declará-las ou usá-las. A visibilidade padrão de constantes de classe é public.
  // O valor deve ser uma expressão constante, não podendo ser (por exemplo) uma variável, uma propriedade, ou uma chamada a uma função.
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

