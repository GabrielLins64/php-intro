<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
// Variáveis:

echo "<h2>Variáveis</h2>";
$nome = "Gabriel";
$idade = 25;
$altura = 1.70;
echo "Nome do usuário: $nome<br>";
echo "Idade: $idade<br>";
echo "Altura: $altura<br>";

$nome = "John";
$idade = 29;
$altura = 1.80;
echo "Nome do usuário: $nome<br>";
echo "Idade: $idade<br>";
echo "Altura: $altura<br>";
echo "<hr>";

// ---------- X ---------- X ---------- 
// Variáveis variáveis

echo "<h2>Variáveis variáveis</h2>";
$destino = "cidade";
$$destino = "Ilhéus"; // Cria uma variável "cidade" com o valor "Ilhéus"
echo "\$destino: " . $destino . "<br>";
echo "\$cidade: " . $cidade . "<br>";
echo "\$destino \${\$destino}: $destino ${$destino}" . "<br>";
echo "<hr>";
?>