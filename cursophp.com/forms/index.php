<html>
<body>
  <button type="button" onclick="location.href='/'">Voltar</button>
  <h2>Formulários</h2>
  <hr>

  <!-- POST -->
  <h3>Formulário POST</h3>
  <form action="forms/dados.php" method="POST">
    Nome: <input type="text" name="nome">
    Email: <input type="email" name="email">
    <input type="submit" name="enviar" value="Enviar">
  </form>
  <hr>

  <!-- GET -->
  <h3>Formulário GET</h3>
  <form action="forms/dados.php" method="GET">
    Nome: <input type="text" name="nome">
    Email: <input type="email" name="email">
    <input type="submit" name="enviar" value="Enviar">
  </form>
  <!-- Também pode ser feito como: -->
  <a href="forms/dados.php?nome=gabriel&email=email@test">Enviar direto</a>

</body>
</html>