<?php
  session_start();
  include_once 'includes/header.php';
  include_once 'php_action/db_conn.php';
  include_once 'includes/message.php';
?>

<hr><h5>CRUD</h3>

<div class="row">
  <div class="col s12 m6 push-m3 blue rounded" style="padding-bottom: 15px;">
    <h3 class="light white-text"> Clientes </h3>

    <table class="striped scroll">
      <thead>
        <tr>
          <th>Nome: </th>
          <th>Sobrenome: </th>
          <th>Email: </th>
          <th>Idade: </th>
          <th>Editar </th>
          <th>Excluir </th>
        </tr>
      </thead>

      <tbody>
        <?php
          $sql = "SELECT * FROM clientes ORDER BY id ASC";
          $res = pg_query($connection, $sql);

          while ($dados = pg_fetch_array($res)):
        ?>
          <tr>
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['sobrenome']; ?></td>
            <td><?php echo $dados['email']; ?></td>
            <td><?php echo $dados['idade']; ?></td>

            <td>
              <a href="/crud/editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange">
                <i class="material-icons">edit</i>
              </a>
            </td>

            <td>
              <a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger">
                <i class="material-icons">delete</i>    
              </a>
            </td>

            <div id="modal<?php echo $dados['id']; ?>" class="modal">
              <div class="modal-content">
                <h4>Opa!</h4>
                <p>Tem certeza que deseja excluir esse cliente?</p>
              </div>

              <div class="modal-footer">
                <form action="php_action/delete.php" method="POST">
                  <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                  <button type="submit" name="btn-deletar" class="btn red"> Sim, quero deletar </button>
                  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat"> Cancelar </a>
                </form>
              </div>
            </div>
          </tr>
        <?php
          endwhile;
        ?>
      </tbody>
    </table><br>

    <div class="center my">
      <a href="/crud/adicionar.php" class="btn-floating">
        <i class="material-icons">add</i>
      </a>
    </div>
  </div>
</div>

<?php
  include_once 'includes/footer.php';
?>
