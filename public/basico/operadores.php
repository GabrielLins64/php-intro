<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
// Operadores:
echo "<h2>Operadores</h2>";

// Aritméticos
echo "<hr><h3>Operadores Aritméticos</h3>";
echo 'echo 2 + 3;<br>
echo 2 - 3;<br>
echo 2 * 3;<br>
echo 2 / 3;<br>
echo 2 % 3;<br>
echo 2 ** 3;<br><br>';

echo "<div style='color: green'>Resultado:<br>";
echo 2 + 3; echo "<br>";
echo 2 - 3; echo "<br>";
echo 2 * 3; echo "<br>";
echo 2 / 3; echo "<br>";
echo 2 % 3; echo "<br>";
echo 2 ** 3; echo "<br>";
echo "</div><br>";

// Incremento
echo "<hr><h3>Operadores de Incremento</h3>";

echo '
$valor = 20;<br>
echo ++$valor;<br>
echo $valor++;<br>
echo $valor;<br>
echo --$valor;<br>
echo $valor--;<br>
echo $valor;<br><br>';

echo "<div style='color: green'>Resultado:<br>";
$valor = 20;
echo ++$valor; echo "<br>";
echo $valor++; echo "<br>";
echo $valor; echo "<br>";
echo --$valor; echo "<br>";
echo $valor--; echo "<br>";
echo $valor; echo "<br>";
echo "</div><br>";

// Atribuição
echo "<hr><h3>Operadores de Atribuição</h3>";
echo '
$a = 10;<br>
$b = 5;<br>
echo $a;<br>
$a += $b;<br>
echo $a;<br>
$a -= $b;<br>
echo $a;<br>
$a *= $b;<br>
echo $a;<br>
$a /= $b;<br>
echo $a;<br><br>';

echo "<div style='color: green'>Resultado:<br>";
$a = 10;
$b = 5;
echo $a."<br>";
$a += $b;
echo $a."<br>";
$a -= $b;
echo $a."<br>";
$a *= $b;
echo $a."<br>";
$a /= $b;
echo $a."<br>";
echo "</div><br>";

// Comparação
echo "<hr><h3>Operadores de Comparação</h3>";
echo '
echo 10 == "10" ? "Igual" : "Diferente";<br>
echo 10 != "10" ? "Diferente" : "Igual";<br>
echo 10 === "10" ? "Idêntico (considerando o tipo)" : "Diferente (considerando o tipo)";<br>
echo 10 !== "10" ? "Diferente (considerando o tipo)" : "Idêntico (considerando o tipo)";<br>
echo 10 <> "10" ? "Diferente (considerando o tipo)" : "Idêntico (considerando o tipo)";<br>
echo 10 < 11 ? "Menor que" : "Maior que";<br>
echo 10 > 11 ? "Maior que" : "Menor que";<br>
echo 10 <= 10 ? "Menor ou igual" : "Maior que";<br>
echo 10 >= 9 ? "Maior ou igual" : "Menor que";<br>
echo 10 <=> 11;<br>
echo 10 <=> 10;<br>
echo 10 <=> 9;<br>
<br>';

echo "<div style='color: green'>Resultado:<br>";
echo 10 == "10" ? "Igual<br>" : "Diferente<br>";
echo 10 != "10" ? "Diferente<br>" : "Igual<br>";
echo 10 === "10" ? "Idêntico (considerando o tipo)<br>" : "Diferente (considerando o tipo)<br>";
echo 10 !== "10" ? "Diferente (considerando o tipo)<br>" : "Idêntico (considerando o tipo)<br>";
echo 10 <> "10" ? "Diferente (considerando o tipo)<br>" : "Idêntico (considerando o tipo)<br>";
echo 10 < 11 ? "Menor que<br>" : "Maior que<br>";
echo 10 > 11 ? "Maior que<br>" : "Menor que<br>";
echo 10 <= 10 ? "Menor ou igual<br>" : "Maior que<br>";
echo 10 >= 9 ? "Maior ou igual<br>" : "Menor que<br>";
echo 10 <=> 11; echo "<br>";
echo 10 <=> 10; echo "<br>";
echo 10 <=> 9; echo "<br>";
echo "</div><br>";

// Lógicos
echo "<hr><h3>Operadores Lógicos</h3>";
echo '
echo (true && true and false) ? "true" : "false";<br>
echo (true || true or false) ? "true" : "false";<br>
echo (true xor true xor false) ? "true" : "false";<br>
echo !true ? "true" : "false";<br>
<br>';

echo "<div style='color: green'>Resultado:<br>";
echo (true && true and false) ? 'true' : 'false'; echo "<br>";
echo (true || true or false) ? 'true' : 'false'; echo "<br>";
echo (true xor true xor false) ? 'true' : 'false'; echo "<br>";
echo !true ? 'true' : 'false'; echo "<br>";
echo "</div><br>";

?>
