<?php
  session_start();
  $servername = "localhost";
  $username = "gabriel";
  $password = "senha123";
  $dbname = "crud";

  $connection = pg_connect ("host=$servername dbname=$dbname user=$username password=$password");
  if (!$connection):
    $_SESSION['mensagem'] = "Falha ao conectar com o banco de dados.<br>";
    echo '<span style="color: red"> Erro: '.$_SESSION['mensagem'].' </span><br>';
  endif;

?>