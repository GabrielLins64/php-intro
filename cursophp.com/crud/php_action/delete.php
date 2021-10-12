<?php
  session_start();
  require_once "db_conn.php";

  if (isset($_POST['btn-deletar'])):
    $id = pg_escape_string($_POST['id']);

    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if (pg_query($connection, $sql)):
      $_SESSION['mensagem'] = "Deletado com sucesso!";
      header('Location: /crud/index.php?sucesso');
      session_regenerate_id(true);
      session_write_close();
      exit;

    else:
      $_SESSION['mensagem'] = "Erro ao deletar";
      header('Location: /crud/index.php?falha');
      session_regenerate_id(true);
      session_write_close();
      exit;

    endif;
  endif;

  exit();
?>