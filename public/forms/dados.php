<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <button type="button" onclick="location.href='/forms'">Voltar</button>
  <h2>Formulário <?php echo $_SERVER['REQUEST_METHOD'] ?></h2>
  <hr>
  <?php
    $method = $_SERVER['REQUEST_METHOD'];

    // ~~~~~~~~~~~~~~~~~ POST ~~~~~~~~~~~~~~~~~
    if ($method === "POST"):
      echo '
      $nome = $_POST[\'nome\'];<br>
      $email = $_POST[\'email\'];<br>
      <br>
      echo "Nome: $nome";<br>
      echo "Email: $email";<br>
      <br>';

      echo "<div style='color: green'>Resultado:<br>";
      $nome = $_POST['nome'];
      $email = $_POST['email'];

      echo "Nome: $nome<br>";
      echo "Email: $email<br>";
      echo "</div><br>";

    // ~~~~~~~~~~~~~~~~~ GET ~~~~~~~~~~~~~~~~~
    elseif ($method === "GET"):
      echo '
      Repare na requisição feita por parâmetros, na URL.<br><br>
      $nome = $_GET[\'nome\'];<br>
      $email = $_GET[\'email\'];<br>
      <br>
      echo "Nome: $nome";<br>
      echo "Email: $email";<br>
      <br>';

      echo "<div style='color: green'>Resultado:<br>";
      $nome = $_GET['nome'];
      $email = $_GET['email'];

      echo "Nome: $nome<br>";
      echo "Email: $email<br>";
      echo "</div><br>";

    endif;
  ?>
  
</body>
</html>
