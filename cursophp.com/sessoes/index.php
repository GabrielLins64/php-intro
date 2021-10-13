<?php session_start(); ?>

<html>
<body>
  <button type="button" onclick="location.href='/'">Voltar</button>
  <button type="button" onclick="location.href='/sessoes';">Recarregar Página</button>
  <h2>Sessões</h2>
  <hr>

  <!-- Salvando dados na sessão -->
  <h3>Salvando dados na sessão</h3>

  <?php
    echo 'O session_start deve ser chamado no inicio do código, antes de qualquer HTML, visto que altera headers do HTTP.';

    echo '<br><br>
    session_start();<br>

    $_SESSION["cor"] = "Verde";<br>
    $_SESSION["carro"] = "Veloster";<br>

    echo $_SESSION["cor"];<br>
    echo $_SESSION["carro"];<br>
    echo session_id();<br>
    <br>';

    echo "<div style='color: green'>Resultado:<br>";
    $_SESSION['cor'] = "Verde";
    $_SESSION['carro'] = "Veloster";

    echo $_SESSION['cor']."<br>";
    echo $_SESSION['carro']."<br>";
    echo session_id()."<br>";
    echo "</div><br>";

  ?>

  <button type="button" onclick="location.href='/sessoes/home.php';">Ir para outra página</button><br><br>

</html>
</body>