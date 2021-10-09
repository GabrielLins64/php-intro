<button type="button" onclick="location.href='/';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Criptografia</h2>";

echo "<hr><h3>Base 64</h3>";

echo '
$senha = "senha123";<br>
$cript = base64_encode($senha);<br><br>
echo "Base64: ".$cript;<br>
echo "Decodificação: ".base64_decode($cript);<br>
<br>';

echo "<div style='color: green'>Resultado:<br>";
$senha = "senha123";
$cript = base64_encode($senha);

echo "Base64: ".$cript."<br>";
echo "Decodificação: ".base64_decode($cript)."<br>";
echo "</div><br>";

echo "<hr><h3>MD5</h3>";

echo '
echo "MD5: ".md5($senha);<br>
<br>';

echo "<div style='color: green'>Resultado:<br>";
echo "MD5: ".md5($senha)."<br>";
echo "</div><br>";

echo "<hr><h3>SHA 1</h3>";

echo '
echo "Sha 1: ".sha1($senha);<br>
<br>';

echo "<div style='color: green'>Resultado:<br>";
echo "Sha 1: ".sha1($senha)."<br>";
echo "</div><br>";

?>
