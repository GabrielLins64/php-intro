<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
  session_start();
  if (isset($_POST['btn-entrar'])):
    include_once('db_connect.php');

    $login = pg_escape_string($_POST['login']);
    $senha = pg_escape_string($_POST['senha']);

    if (empty($login) or empty($senha)):
      $_SESSION['errorMsg'] = "Os campos login e senha precisam ser preenchidos!<br>";

    else:
      $query = "SELECT id, login, senha FROM usuarios WHERE login = '$login'";
      $res = pg_query($connection, $query);
      pg_close($connection);
      
      if (pg_num_rows($res) > 0):
        $dados = pg_fetch_array($res, 0);

        if ($dados['senha'] === md5($_POST['senha'])):
          $_SESSION['errorMsg'] = "<h3 style='color: green'>Logado com sucesso!</h3>";
          $_SESSION['logado'] = true;
          $_SESSION['id_usuario'] = $dados['id'];
          header('Location: /sistemadelogin/home.php');

        else:
          $_SESSION['errorMsg'] = "Senha incorreta!<br>";

        endif;

      else:
        $_SESSION['errorMsg'] = "Usuário inexistente!<br>";

      endif;
    endif;
  endif;
?>

<html>
<head>
  <title>Login</title>
  <meta charset="utf-8">
</head>
<body>
  <button type="button" onclick="location.href='/'">Voltar</button>
  <h2>Login</h2>
  <hr>

  <?php 
    if(isset($_SESSION['errorMsg'])):
      echo "<span style='color: red'>";
      echo $_SESSION['errorMsg'];
      echo "</span><br>";
    endif;
  ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    Login: <input type="text" name="login"><br>
    Senha: <input type="password" name="senha"><br><br>
    <button type="submit" name="btn-entrar">Entrar</button>
  </form>
</body>
</html>