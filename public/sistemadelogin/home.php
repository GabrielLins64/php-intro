<?php
  session_start();
  include_once('db_connect.php');

  if (!isset($_SESSION['logado']) or !$_SESSION['logado']):
    $_SESSION['errorMsg'] = "Por favor faça login primeiro.<br>";
    header('Location: /sistemadelogin');
  
  else:
    $userId = $_SESSION['id_usuario'];
    $query = "SELECT nome FROM usuarios WHERE id = '$userId'";
    $res = pg_query($connection, $query);
    pg_close($connection);

    $dados = pg_fetch_array($res, 0);
    $_SESSION['nome_usuario'] = $dados['nome'];

  endif;
?>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Acesso restrito</title>
  <meta charset="utf-8">
</head>
<body>
  <h2>Logado!</h2>
  <hr>

  <p>Bem vindo, <?php echo $_SESSION['nome_usuario']; ?></p>
  <form action="/sistemadelogin/logout.php" method="post">
    <input type="submit" name="logout" value="Logout">
  </form>
</body>
</html>