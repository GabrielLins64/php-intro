<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <button type="button" onclick="location.href='/'">Voltar</button>
  <button type="button" onclick="location.href='/forms/filtros.php';">Recarregar Página</button>
  <h2>Formulários com filtros</h2>
  <a href="https://www.php.net/manual/en/filter.filters.php" target="_blank">Documentação de filtros do PHP</a><br><br>
  <hr>

  <!-- POST com filtros de validação -->
  <h3>Formulário POST com filtros de validação</h3>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="display: table;">
    <p style="display: table-row;">
      <label for="idade" style="display: table-cell;">Idade</label>
      <input id="idade" type="text" name="idade" style="display: table-cell;">
    </p>
    <p style="display: table-row;">
      <label for="email" style="display: table-cell;">Email</label>
      <input id="email" type="email" name="email" style="display: table-cell;">
    </p>
    <p style="display: table-row;">
      <label for="peso" style="display: table-cell;">Peso</label>
      <input id="peso" type="text" name="peso" style="display: table-cell;">
    </p>
    <p style="display: table-row;">
      <label for="ip" style="display: table-cell;">IP</label>
      <input id="ip" type="text" name="ip" style="display: table-cell;">
    </p>
    <p style="display: table-row;">
      <label for="url" style="display: table-cell;">URL</label>
      <input id="url" type="text" name="url" style="display: table-cell;">
    </p>
    <br>
    <button type="submit" name="filtros-validacao">Enviar</button>
  </form>

  <?php
  if (isset($_POST["filtros-validacao"])):
    $erros = array();

    if (!$idade = filter_input(INPUT_POST, "idade", FILTER_VALIDATE_INT)):
      $erros[] = "Idade precisa ser um inteiro.<br>";
    endif;

    if (!$idade = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)):
      $erros[] = "Email inválido.<br>";
    endif;

    if (!$idade = filter_input(INPUT_POST, "peso", FILTER_VALIDATE_FLOAT)):
      $erros[] = "Peso precisa ser um float.<br>";
    endif;

    if (!$idade = filter_input(INPUT_POST, "ip", FILTER_VALIDATE_IP)):
      $erros[] = "IP inválido.<br>";
    endif;

    if (!$idade = filter_input(INPUT_POST, "url", FILTER_VALIDATE_URL)):
      $erros[] = "URL inválido.<br>";
    endif;

    if (!empty($erros)):
      foreach($erros as $erro):
        echo "<li> $erro </li>";
      endforeach;
    else:
      echo "Enviou formulario com filtros!<br>";
      var_dump($_POST);
    endif;
  endif;
  ?>

  <!-- POST com filtros de sanitização -->
  <h3>Formulário POST com filtros de sanitização</h3>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="display: table;">
    <p style="display: table-row;">
      <label for="nome" style="display: table-cell;">Nome</label>
      <input id="nome" type="text" name="nome" style="display: table-cell;">
    </p>
    <p style="display: table-row;">
      <label for="idade" style="display: table-cell;">Idade</label>
      <input id="idade" type="text" name="idade" style="display: table-cell;">
    </p>
    <p style="display: table-row;">
      <label for="email" style="display: table-cell;">Email</label>
      <input id="email" type="text" name="email" style="display: table-cell;">
    </p>
    <p style="display: table-row;">
      <label for="url" style="display: table-cell;">URL</label>
      <input id="url" type="text" name="url" style="display: table-cell;">
    </p>
    <br>
    <button type="submit" name="filtros-sanitizacao">Enviar</button>
  </form>

  <?php
  if (isset($_POST["filtros-sanitizacao"])):
    $erros = array();

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    echo $nome."<br>";

    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    echo $idade."<br>";

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    echo $email."<br>";

    $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
    echo $url."<br>";
  endif;
  ?>
</html>
</body>