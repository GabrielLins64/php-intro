<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

echo "<hr><h3>Senha segura</h3>";

echo '
$options = [<br>
&emsp;  \'cost\' => 13,<br>
];<br>
<br>
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);<br>
$hashGerado = "$2y$13$KOahvobZJFzblxUWX7mKjOO6To1t4zseTKnr3XvcFB1cxwiRjLLOi";<br>
echo "Senha segura: ".$senhaSegura;<br>
<br>
if (password_verify($senha, $hashGerado)):<br>
&emsp;  echo "Senha válida!";<br>
else:<br>
&emsp;  echo "Senha inválida!";<br>
endif;<br>
<br>';

echo "<div style='color: green'>Resultado:<br>";
$options = [
  'cost' => 13,
];

$senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
$hashGerado = '$2y$13$KOahvobZJFzblxUWX7mKjOO6To1t4zseTKnr3XvcFB1cxwiRjLLOi';

echo "Senha segura: ".$senhaSegura."<br>";

if (password_verify($senha, $hashGerado)):
  echo "Senha válida!<br>";
else:
  echo "Senha inválida!<br>";
endif;

echo "</div><br>";

?>
