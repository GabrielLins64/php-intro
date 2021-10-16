<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <button type="button" onclick="location.href='/'">Voltar</button>
  <button type="button" onclick="location.href='/upload';">Recarregar Página</button>
  <h2>Upload de arquivos</h2>
  <hr>

  <!-- Upload unitário -->
  <h3>Upload unitário</h3>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo"><br>
    <input type="submit" name="enviar-arquivo">
  </form>

  <?php
    $pasta = "arquivos/";

    if (isset($_POST['enviar-arquivo'])):
      $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
      $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

      if (in_array($extensao, $formatosPermitidos)):
        $tmp = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid().".$extensao";

        if (move_uploaded_file($tmp, $pasta.$novoNome)):
          $mensagem = "Upload feito com sucesso!";
        else:
          $mensagem = "Erro, não foi possível fazer o upload.";
        endif;
      else:
        $mensagem = "Formato inválido";
      endif;

      echo $mensagem."<br>";
    endif;
  ?>

  <hr>
  <!-- Upload múltiplo -->
  <h3>Upload múltiplo</h3>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivos[]" multiple><br>
    <input type="submit" name="enviar-arquivos">
  </form>

  <?php
    $pasta = "arquivos/";

    if (isset($_POST['enviar-arquivos'])):
      $qtdArquivos = count($_FILES['arquivos']['name']);
      $formatosPermitidos = array("png", "jpeg", "jpg", "gif");

      for ($i = 0; $i < $qtdArquivos; $i++) {
        $extensao = pathinfo($_FILES['arquivos']['name'][$i], PATHINFO_EXTENSION);

        if (in_array($extensao, $formatosPermitidos)):
          $tmp = $_FILES['arquivos']['tmp_name'][$i];
          $novoNome = uniqid().".$extensao";

          if (move_uploaded_file($tmp, $pasta.$novoNome)):
            echo "Upload feito com sucesso para $pasta.$novoNome<br>";

          else:
            echo "Erro, não foi possível fazer o upload do arquivo $tmp<br>";

          endif;

        else:
          echo "Formato inválido: $extensao<br>";

        endif;
      }
    endif;
  ?>

</html>
</body>