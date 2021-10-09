<?php
  session_start();
  $servername = "localhost";
  $username = "gabriel";
  $password = "senha123";
  $dbname = "sistemalogin";

  $connection = pg_connect ("host=$servername dbname=$dbname user=$username password=$password");
  if (!$connection):
    $_SESSION['errorMsg'] = "Falha ao conectar com o banco de dados.<br>";
  else:
    $_SESSION['errorMsg'] = "";
  endif;
?>