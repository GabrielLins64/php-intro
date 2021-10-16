<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/';">Voltar</button>
<button type="button" onclick="location.href='/cookies.php';">Recarregar a página</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Cookie</h2>";

echo "<hr><h3>Criando Cookies</h3>";

echo '
setcookie("user", "Gabriel Lins", time()+3600);<br>
setcookie("email", "glm@gmail.com", time()+3600);<br>
setcookie("ultima_pesquisa", "curso de php", time()+3600);<br>
var_dump($_COOKIE);<br>
<br>';

echo "<div style='color: green'>Resultado (se os cookies ainda não aparecerem, recarregue a página):<br>";
setcookie('user', 'Gabriel Lins', time()+3600);
setcookie('email', 'glm@gmail.com', time()+3600);
setcookie('ultima_pesquisa', 'curso de php', time()+3600);
var_dump($_COOKIE);
echo "</div><br>";

echo "<hr><h3>Limpar os Cookies</h3>";

echo "<h4>Por código</h4>";

echo '
Configure um valor negativo no time do cookie:<br><br>
setcookie("email", "glm@gmail.com", time()-3600);<br>
setcookie("ultima_pesquisa", "curso de php", time()-3600);<br>
<br>';

echo '
  <form method="get">
    <input type="submit" name="clear_cookies" value="Limpar Cookies"/>
  </form>
';

echo "<div style='color: green'>Resultado:<br>";
function limpar_cookies()
{
  setcookie('email', 'glm@gmail.com', time()-3600);
  setcookie('ultima_pesquisa', 'curso de php', time()-3600);
  header('Location: /cookies.php');
};

if (isset($_GET['clear_cookies'])):
  limpar_cookies();
endif;

var_dump($_COOKIE);
echo "</div>";

echo "<h4>Manualmente</h4>";

echo '
No Chrome, vá em "Settings" > "Privacy and security" ><br>
"Cookies and other site data" > "See all cookies and site data".<br>
Então, procure por "localhost" e verá os cookies locais.
<br>';

?>
