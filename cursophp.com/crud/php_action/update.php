<?php
  session_start();
  require_once "db_conn.php";

  function clear($input)
  {
    // Prevent SQL Injection (Best way would be through parametrized queries and PDO - PHP Data Object)
    $var = pg_escape_string($input);
    // Prevent XSS (Cross Site Scripting)
    $var = htmlspecialchars($var);

    return $var;
  }

  if (isset($_POST['btn-editar'])):
    $id = pg_escape_string($_POST['id']);
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);

    $sql = "
      UPDATE clientes SET 
      nome = '$nome',
      sobrenome = '$sobrenome',
      email = '$email',
      idade = '$idade' 
      WHERE id = '$id';
    ";

    if (pg_query($connection, $sql)):
      $_SESSION['mensagem'] = "Atualizado com sucesso!";
      header('Location: /crud/index.php?sucesso');
      session_regenerate_id(true);
      session_write_close();
      exit;

    else:
      $_SESSION['mensagem'] = "Erro ao atualizar";
      header('Location: /crud/index.php?falha');
      session_regenerate_id(true);
      session_write_close();
      exit;

    endif;
  endif;

  exit();
?>