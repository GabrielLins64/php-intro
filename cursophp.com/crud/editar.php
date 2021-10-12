<?php
  include_once 'php_action/db_conn.php';
  include_once 'includes/header.php';

  if (isset($_GET['id'])):
    $id = pg_escape_string($connection, $_GET['id']);
    $sql = "SELECT * FROM clientes WHERE id = '$id'";

    $res = pg_query($connection, $sql);
    $dados = pg_fetch_array($res);

  else:
    $_SESSION['mensagem'] = "Falha ao editar: ID inválido.";
    header('Location: /crud/index.php?falha');
    session_regenerate_id(true);
    session_write_close();

  endif;
?>

<hr><h5>CRUD</h3>

<div class="row">
  <div class="col s12 m6 push-m3 blue rounded" style="padding-bottom: 15px;">
    <h3 class="light white-text"> Editar Cliente </h3>

    <form action="php_action/update.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
    
      <div class="input-field col s12 indigo lighten-5 rounded">
        <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'] ?>">
        <label for="nome">Nome</label>
      </div>

      <div class="input-field col s12 indigo lighten-5 rounded">
        <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome'] ?>">
        <label for="sobrenome">Sobrenome</label>
      </div>

      <div class="input-field col s12 indigo lighten-5 rounded">
        <input type="email" name="email" id="email" value="<?php echo $dados['email'] ?>">
        <label for="email">Email</label>
      </div>

      <div class="input-field col s12 indigo lighten-5 rounded">
        <input type="number" name="idade" id="idade" value="<?php echo $dados['idade'] ?>">
        <label for="idade">Idade</label>
      </div>

      <div class="container center">
        <button type="submit" name="btn-editar" class="btn me my"> Atualizar </button>
        <button type="button" class="btn orange darken-2" onclick="location.href='/crud';">Voltar</button>
      </div>
    </form>
  </div>
</div>

<?php
  include_once 'includes/footer.php';
?>
