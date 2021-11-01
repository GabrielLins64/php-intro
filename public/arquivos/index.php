<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
  echo "<h2>Manipulação de Arquivos</h2>";

  echo "<hr><h3>Ler arquivo ('r'ead mode)</h3>";
  echo '
    <b>*Este modo de abertura permite ler o arquivo.</b><br><br>
    $arquivo = "arquivo.txt";<br>
    $tamanhoArquivo = filesize($arquivo);<br>
    $arquivoAberto = fopen($arquivo, "r");<br>
    <br>
    while(!feof($arquivoAberto)):<br>
    &emsp;  $linha = fgets($arquivoAberto, $tamanhoArquivo);<br>
    &emsp;  echo nl2br($linha);<br>
    endwhile;<br>
    <br>
    fclose($arquivoAberto);<br>
  <br>';

?>
<form action="/arquivos" method="get">
  <button type="submit" name="ler" value="true">Ler o arquivo</button>
</form>
<?php

  function ler()
  {
    $arquivo = "arquivo.txt";
    $tamanhoArquivo = filesize($arquivo);
    $arquivoAberto = fopen($arquivo, "r");

    while(!feof($arquivoAberto)):
      $linha = fgets($arquivoAberto, $tamanhoArquivo);
      echo nl2br($linha);
    endwhile;

    fclose($arquivoAberto);
  }

  if (isset($_GET['ler']) && $_GET['ler']):
    echo "<div style='color: green;'> Resultado:<br>";
    ler();
    echo "</div><br>";
  endif;

  echo "<hr><h3>Escrever conteúdo ('w'rite mode)</h3>";
  echo '
    <b>*Este modo de abertura de arquivo sobrescreve todo o conteúdo do mesmo.</b><br><br>
    $arquivo = "arquivo.txt";<br>
    $conteudo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n";<br>
    $arquivoAberto = fopen($arquivo, "w");<br>
    <br>
    fwrite($arquivoAberto, $conteudo);<br>
    fclose($arquivoAberto);<br>
  <br>';

?>
<form action="/arquivos" method="get">
  <button type="submit" name="escrever" value="true">Escrever no arquivo</button>
</form>
<?php

  function escrever()
  {
    $arquivo = "arquivo.txt";
    $conteudo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n";
    $arquivoAberto = fopen($arquivo, "w");

    fwrite($arquivoAberto, $conteudo);
    fclose($arquivoAberto);
  }

  if (isset($_GET['escrever']) && $_GET['escrever']):
    escrever();
  endif;

  echo "<hr><h3>Adicionar conteúdo ('a'ppend mode)</h3>";
  echo '
    <b>*Este modo de abertura de arquivo adiciona o conteúdo ao final do arquivo.</b><br><br>
    $arquivo = "arquivo.txt";<br>
    $conteudo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n";<br>
    $arquivoAberto = fopen($arquivo, "a");<br>
    <br>
    fwrite($arquivoAberto, $conteudo);<br>
    fclose($arquivoAberto);<br>
  <br>';

?>
<form action="/arquivos" method="get">
  <button type="submit" name="adicionar" value="true">Adicionar no arquivo</button>
</form>
<?php

  function adicionar()
  {
    $arquivo = "arquivo.txt";
    $conteudo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n";
    $arquivoAberto = fopen($arquivo, "a");

    fwrite($arquivoAberto, $conteudo);
    fclose($arquivoAberto);
  }

  if (isset($_GET['adicionar']) && $_GET['adicionar']):
    adicionar();
  endif;

?>
