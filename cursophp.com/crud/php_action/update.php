<?php
  session_start();
  require_once "db_conn.php";

  if (isset($_POST['btn-editar'])):
    $id = pg_escape_string($_POST['id']);
    $nome = pg_escape_string($_POST['nome']);
    $sobrenome = pg_escape_string($_POST['sobrenome']);
    $email = pg_escape_string($_POST['email']);
    $idade = pg_escape_string($_POST['idade']);

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