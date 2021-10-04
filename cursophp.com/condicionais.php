<button type="button" onclick="location.href='/';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
// Condicionais:
echo "<h2>Condicionais</h2>";

// If / elseif / else
echo "<hr><h3>if / elseif / else</h3>";
echo '$numero = 11;<br>
if ($numero == 10):<br>
&emsp; echo "É igual a 10";<br>
elseif ($numero <= 9):<br>
&emsp;  echo "É menor ou igual a 9";<br>
else:<br>
&emsp;  echo "É maior que 10";<br>
endif;<br><br>';

echo "<div style='color: green'>Resultado: ";
$numero = 11;
if ($numero == 10):
  echo "É igual a 10";
elseif ($numero <= 9):
  echo "É menor ou igual a 9";
else:
  echo "É maior que 10";
endif;
echo "</div><br>";

// Ternário (?)
echo "<hr><h3>Operador Ternário (?)</h3>";
echo "5 > 6 ? '5 é maior que 6' : '5 é menor ou igual a 6'<br><br>";

echo "<div style='color: green'>Resultado: ";
echo 5 > 6 ? '5 é maior que 6' : '5 é menor ou igual a 6';
echo "</div><br>";

// Switch case
echo "<hr><h3>Switch Case</h3>";
echo '
$cor = "amarelo";<br>
switch ($cor):<br>
&emsp;  case "vermelho":<br>
&emsp;&emsp;  echo "Cor vermelho";<br>
&emsp;&emsp;  break;<br>
&emsp;  case "verde":<br>
&emsp;&emsp;  echo "Cor verde";<br>
&emsp;&emsp;  break;<br>
&emsp;  case "azul":<br>
&emsp;&emsp;  echo "Cor azul";<br>
&emsp;&emsp;  break;<br>
&emsp;  default:<br>
&emsp;&emsp;  echo "Cor desconhecida!";<br>
&emsp;  endswitch;
<br><br>';

echo "<div style='color: green'>Resultado: ";
$cor = "amarelo";
switch ($cor):
  case "vermelho":
    echo "Cor vermelho";
    break;
  case "verde":
    echo "Cor verde";
    break;
  case "azul":
    echo "Cor azul";
    break;
  default:
    echo "Cor desconhecida!";
  endswitch;
echo "</div><br>";

?>
