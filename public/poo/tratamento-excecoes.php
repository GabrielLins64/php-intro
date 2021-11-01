<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Tratamento de Exceções</h2>";

echo '

<br>
class Newsletter<br>
{<br>
&emsp;public function cadastrarEmail($email)<br>
&emsp;{<br>
&emsp;&emsp;if (!filter_var($email, FILTER_VALIDATE_EMAIL)):<br>
&emsp;&emsp;&emsp;throw new Exception("Este é um email inválido!", 13);<br>
&emsp;&emsp;else:<br>
&emsp;&emsp;&emsp;echo "Email cadastrado com sucesso!";<br>
&emsp;&emsp;endif;<br>
&emsp;}<br>
}<br>
<br>
$newsletter = new Newsletter();<br>
try<br>
{<br>
&emsp;$newsletter->cadastrarEmail("contato@");<br>
}<br>
catch (Exception $err)<br>
{<br>
&emsp;echo "Exceção: ";<br>
&emsp;echo "Mensagem: ".$err->getMessage();<br>
&emsp;echo "Código: ".$err->getCode();<br>
&emsp;echo "Linha: ".$err->getLine();<br>
&emsp;echo "Arquivo: ".$err->getFile();<br>
}<br>

<br>';

echo "<div style='color: green'>Resultado:<br>";

class Newsletter
{
  public function cadastrarEmail($email)
  {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)):
      throw new Exception("Este é um email inválido!", 13);
    else:
      echo "Email cadastrado com sucesso!";
    endif;
  }
}

$newsletter = new Newsletter();
try
{
  $newsletter->cadastrarEmail("contato@");
}
catch (Exception $err)
{
  echo '<span style="color: red">';
  echo "<b>Exceção: </b><br>";
  echo "<b>Mensagem: </b>".$err->getMessage()."<br>";
  echo "<b>Código: </b>".$err->getCode()."<br>";
  echo "<b>Linha: </b>".$err->getLine()."<br>";
  echo "<b>Arquivo: </b>".$err->getFile()."<br>";
  echo '</span>';
}

echo "</div><br>";

?>
