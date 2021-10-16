<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
// Operadores:
echo "<h2>Laços</h2>";

// While e Do While
echo "<hr><h3>While e Do While</h3>";

echo '
$contador = 0;<br>
while ($contador < 3):<br>
&emsp;  echo "Contador é $contador";<br>
&emsp;  $contador++;<br>
endwhile;<br>
<br>
$contador = 0;<br>
do {<br>
&emsp;  echo "Contador é $contador";<br>
&emsp;  $contador++;<br>
} while ($contador < 3);<br>
<br>';

echo "<div style='color: green'>Resultado:<br>";
$contador = 0;
while ($contador < 3):
  echo "Contador é $contador<br>";
  $contador++;
endwhile;

$contador = 0;
do {
  echo "Contador é $contador<br>";
  $contador++;
} while ($contador < 3);
echo "</div><br>";

// For e Foreach
echo "<hr><h3>For e Foreach</h3>";

echo '
for ($contador = 0; $contador <= 2; $contador++):<br>
&emsp;  echo \'$contador: \'.$contador;<br>
endfor;<br>
<br>
$comidas = array("Maçã", "Banana", "Peixe");<br>
foreach($comidas as $valor):<br>
&emsp;  echo $valor;<br>
endforeach;<br>
<br>
foreach($comidas as $indice => $valor):<br>
&emsp;  echo $indice."-".$valor;<br>
endforeach;<br>
<br>';

echo "<div style='color: green'>Resultado:<br>";
for ($contador = 0; $contador <= 2; $contador++):
  echo '$contador: '.$contador.'<br>';
endfor;

$comidas = array("Maçã", "Banana", "Peixe");
foreach($comidas as $valor):
  echo $valor."<br>";
endforeach;

$comidas = array("Maçã", "Banana", "Peixe");
foreach($comidas as $indice => $valor):
  echo $indice."-".$valor."<br>";
endforeach;
echo "</div><br>";

?>
