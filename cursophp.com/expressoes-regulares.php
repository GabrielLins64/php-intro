<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Expressões Regulares</h2>";

echo "<hr><h3>Resumo</h3>";

echo '
Expressões Regulares, ou "Regex", são sequências de símbolos e caracteres que expressam um padrão. É uma maneira de identificar cadeias de caracteres específicas. Mais sobre expressões regulares em PHP pode ser visto <a href="https://www.php.net/manual/pt_BR/reference.pcre.pattern.syntax.php" target="_blank">na documentação oficial.</a><br><br>

Alguns operadores de Regex utilizados no PHP:<br>
<b> ^ </b>: Início da expressão<br>
<b> $ </b>: Final da expressão<br>
<b> /i </b>: Case sensitive<br>
<b> [] </b>: Conjunto de caracteres<br>
<b> {} </b>: Ocorrências<br><br>

Para validar expressões regulares no PHP, utilizamos a função <b>preg_match(padrão, string)</b>. Onde:<br>
<b>padrão:</b> O regex utilizado<br>
<b>string:</b> O texto a ser avaliado<br>
<br>';

echo "<hr><h3>Exemplos</h3>";

function p_color($string, $color)
{
  return "<span style='color: $color;'>$string</span>";
}

function pretty_print(...$arguments)
{
  echo p_color($arguments[2], "blue")."<br>";
  echo 'preg_match("'.$arguments[0].'", "'.$arguments[1].'"); <b>&ndash;</b> ';
  echo preg_match($arguments[0], $arguments[1]) ? p_color("true", "green") : p_color("false", "red");
  echo '<br><br>';
}

pretty_print("/^a/", "abc", "Expressões que começam com \"a\"");
pretty_print("/^c/", "abc", "Expressões que começam com \"c\"");
pretty_print("/bc$/", "abc", "Expressões que terminam com \"bc\"");
pretty_print("/b$/", "abc", "Expressões que terminam com \"b\"");
pretty_print("/^[a-zA-Z]+$/", "abcDE", "Expressões que contém apenas letras maiúsculas e/ou minúsculas");
pretty_print("/^[a-z]+$/i", "abcDE", "Expressões que contém apenas letras maiúsculas e/ou minúsculas");
pretty_print("/^[a-z]+$/i", "abcDE1", "Expressões que contém letras maiúsculas e/ou minúsculas");
pretty_print("/^[0-9]{5}$/", "12345", "Expressões que contém exatamente 5 números");
pretty_print("/^[0-9]{5}$/", "1234", "Expressões que contém exatamente 5 números");
pretty_print("/^[0-9]{1,4}$/", "1234", "Expressões que contém de 1 a 4 números");
pretty_print("/^[0-9]{1,4}$/", "5", "Expressões que contém de 1 a 4 números");
pretty_print("/^[0-9]{1,4}$/", "12345", "Expressões que contém de 1 a 4 números");
pretty_print("/^[0-9]{1,4}$/", "123a", "Expressões que contém de 1 a 4 números");
pretty_print("/^[a-zA-Z]?$/", "A", "Expressões que contém 1 ou nenhuma letra");
pretty_print("/^[a-zA-Z]?$/", "", "Expressões que contém 1 ou nenhuma letra");
pretty_print("/^[a-zA-Z]?$/", "Ab", "Expressões que contém 1 ou nenhuma letra");
pretty_print("/^[a-z]+$/", "abc", "Expressões que contém uma ou mais letras do alfabeto minúsculas");
pretty_print("/^[a-z]+$/", "abc1", "Expressões que contém uma ou mais letras do alfabeto minúsculas");
pretty_print("/^[a-z]+$/", "abcA", "Expressões que contém uma ou mais letras do alfabeto minúsculas");
pretty_print("/^[a-zA-Z0-9]+$/", "aBC23", "Expressões que contém uma ou mais letras do alfabeto e/ou números");
pretty_print("/^[a-zA-Z]*$/", "AbasASDasdas", "Expressões que contém qualquer quantidade de letras");
pretty_print("/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)$/i", "meu.Email1@gmail.com", "Validação de um email");
pretty_print("/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)$/i", "@gmail.com", "Validação de um email");
pretty_print("/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)$/i", "email@gmail", "Validação de um email");
pretty_print("/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)$/i", "email@.com", "Validação de um email");
pretty_print("/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br|net)$/i", "email@gmail.com.pl", "Validação de um email");
pretty_print("/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/", "18/10/2021", "Validação de datas");

?>
