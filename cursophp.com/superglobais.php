<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
// Título:
echo "<h2>Superglobais</h2>";
echo "Superglobais são variáveis nativas que estão sempre disponíveis em todos escopos.<br><br>";

// $GLOBALS
echo "<hr><h3>\$GLOBALS</h3>";

echo '
Armazena todas as variáveis globais num Array.<br>
<br>
$x = 10;<br>
$y = 15;<br>
function soma()<br>
{<br>
&emsp;  echo ($GLOBALS[\'x\'] + $GLOBALS[\'y\']);<br>
}<br>
soma();<br>
<br>';

echo "<div style='color: green'>Resultado:<br>";
$x = 10;
$y = 15;
function soma()
{
  echo ($GLOBALS['x'] + $GLOBALS['y'])."<br>";
}
soma();
echo "</div><br>";

// $_SERVER
echo "<hr><h3>\$_SERVER</h3>";

echo '
É um array contendo informação como cabeçalhos, paths, e localizações do script. As entradas neste array são criadas pelo servidor web.<br>
<br>
print_r($_SERVER);<br>
echo "Tamanho: ".count($_SERVER);<br>
<br>';

echo "<div style='color: green'>Resultado:<br>";
print_r($_SERVER);
echo "<br>Tamanho: ".count($_SERVER)."<br>";
echo "</div><br>";

// $Outras superglobais
echo "<hr><h3>Outras superglobais</h3>";

echo '
$_GET: Um array associativo de variáveis passadas para o script atual via o método HTTP GET.<br><br>
$_POST: Um array associativo de variáveis passados para o script atual via método HTTP POST quando utilizado application/x-www-form-urlencoded ou multipart/form-data como valor do cabeçalho HTTP Content-Type na requisição.<br><br>
$_FILES: Um array associativo de items enviado através do script atual pelo método HTTP POST. A estrutura deste array é detalhada na seção <a href="https://www.php.net/manual/pt_BR/features.file-upload.post-method.php" target="_blank">Uploads com o método POST.</a><br><br>
$_REQUEST: Um array associativo que por padrão contém informações de $_GET, $_POST e $_COOKIE.<br><br>
$_SESSION: Um array associativo contendo variáveis de sessão disponíveis para o atual script. Veja a <a href="https://www.php.net/manual/pt_BR/ref.session.php" target="_blank">documentação das funções de Sessão</a> para mais informação em como usar isto.<br><br>
$_ENV: Um array associativo de variáveis passadas para o script atual via o método do ambiente.<br><br>
$_COOKIE: Um array associativo de variáveis passadas para o atual script via HTTP Cookies.<br><br>
<br>';

?>
