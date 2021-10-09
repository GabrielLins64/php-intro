<?php session_start(); ?>

<html>
<body>
  <button type="button" onclick="location.href='/sessoes'">Voltar</button>
  <button type="button" onclick="location.href='/sessoes/home.php';">Recarregar Página</button>
  <h2>Sessões</h2>
  <hr>

  <!-- Salvando dados na sessão -->
  <h3>Salvando dados na sessão</h3>

  <?php
    echo 'Mesmo em outra página, os dados salvos na sessão ainda são armazenados.';

    echo '<br><br>
      session_start();<br><br>
      if (isset($_GET["unset"])):<br>
      &emsp;  session_unset();<br>
      endif;<br><br>
      if (isset($_GET["destroy"])):<br>
      &emsp;  session_destroy();<br>
      endif;<br><br>
      echo $_SESSION["cor"];<br>
      echo $_SESSION["carro"];<br>
      echo session_id();<br>
    <br>';

    if (isset($_GET['unset'])):
      session_unset();
    endif;

    if (isset($_GET['destroy'])):
      session_destroy();
    endif;

    echo "<div style='color: green'>Resultado:<br>";
    echo $_SESSION['cor']."<br>";
    echo $_SESSION['carro']."<br>";
    echo session_id()."<br>";
    echo "</div><br>";

  ?>

  <button type="button" onclick="location.href='/sessoes/home.php?unset=true'">Dar um unset na sessão</button><br><br>
  <button type="button" onclick="location.href='/sessoes/home.php?destroy=true'">Dar um destroy na sessão</button><br><br>

</html>
</body>