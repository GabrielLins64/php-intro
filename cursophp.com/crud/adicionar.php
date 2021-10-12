<?php
  include_once 'includes/header.php';
?>

<hr><h5>CRUD</h3>

<div class="row">
  <div class="col s12 m6 push-m3 blue rounded" style="padding-bottom: 15px;">
    <h3 class="light white-text"> Novo Cliente </h3>

    <form action="php_action/create.php" method="POST">
      <div class="input-field col s12 indigo lighten-5 rounded">
        <input type="text" name="nome" id="nome">
        <label for="nome">Nome</label>
      </div>

      <div class="input-field col s12 indigo lighten-5 rounded">
        <input type="text" name="sobrenome" id="sobrenome">
        <label for="sobrenome">Sobrenome</label>
      </div>

      <div class="input-field col s12 indigo lighten-5 rounded">
        <input type="email" name="email" id="email">
        <label for="email">Email</label>
      </div>

      <div class="input-field col s12 indigo lighten-5 rounded">
        <input type="number" name="idade" id="idade">
        <label for="idade">Idade</label>
      </div>

      <div class="container center">
        <button type="submit" name="btn-cadastrar" class="btn me my"> Cadastrar </button>
        <button type="button" class="btn orange darken-2" onclick="location.href='/crud';">Voltar</button>
      </div>
    </form>
  </div>
</div>

<?php
  include_once 'includes/footer.php';
?>
