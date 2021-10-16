<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
// Título:
echo "<h2>Funções</h2>";

// Funções para strings
echo "<hr><h3>Funções para strings</h3>";

echo '
$nome = "Gabriel Lins";<br>
echo $nome;<br>
echo strtoupper($nome);<br>
echo strtolower($nome);<br>
echo substr($nome, 0, 7);<br>
echo substr($nome, 8, 4);<br>
echo str_pad($nome, 21, "*", STR_PAD_BOTH);<br>
echo str_repeat($nome, 3);<br>
echo strlen($nome);<br>
echo str_replace("Lins", "X", $nome);<br>
echo strpos($nome, "Lins");<br>
<br>';

echo "<div style='color: green'>Resultado:<br>";
$nome = "Gabriel Lins";
echo $nome."<br>";
echo strtoupper($nome)."<br>";
echo strtolower($nome)."<br>";
echo substr($nome, 0, 7)."<br>";
echo substr($nome, 8, 4)."<br>";
echo str_pad($nome, 21, "*", STR_PAD_BOTH)."<br>";
echo str_repeat($nome, 3)."<br>";
echo strlen($nome)."<br>";
echo str_replace("Lins", "X", $nome)."<br>";
echo strpos($nome, "Lins")."<br>";
echo "</div><br>";

// Funções para Números
echo "<hr><h3>Funções para Números</h3>";

echo '
$valorReal = 12345678.90;<br>
$preco = number_format($valorReal, 2, ",", ".");<br>
echo "Valor: ".$preco;<br>
echo round(3.4);<br>
echo round(3.5);<br>
echo round(3.6);<br>
echo ceil(3.2);<br>
echo floor(3.9);<br>
echo rand(1, 20);<br>
<br>';

echo "<div style='color: green'>Resultado:<br>";
$valorReal = 12345678.90;
$preco = number_format($valorReal, 2, ",", ".");
echo "Valor: ".$preco."<br>";
echo round(3.4)."<br>";
echo round(3.5)."<br>";
echo round(3.6)."<br>";
echo ceil(3.2)."<br>";
echo floor(3.9)."<br>";
echo rand(1, 20)."<br>";
echo "</div><br>";

// Criar funções
echo "<hr><h3>Criar funções</h3>";

echo '
function exibirNome($nome) {<br>
&emsp;  return "Meu nome é ".$nome;<br>
}<br>
$resultado = exibirNome("Gabriel");<br>
echo $resultado;<br>
<br>';

echo "<div style='color: green'>Resultado:<br>";
function exibirNome($nome) {
  return "Meu nome é ".$nome."<br>";
}
$resultado = exibirNome("Gabriel");
echo $resultado;
echo "</div><br>";

?>
