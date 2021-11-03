<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>

<button type="button" onclick="location.href='/poo';">Voltar</button>
<h1>CRUD com PDO, Singleton e Autoload</h1>

<hr>

<h2>PDO (PHP Data Objects)</h2>

<p>
  The PHP Data Objects (PDO) extension defines a lightweight, consistent interface for accessing databases in PHP. Each database driver that implements the PDO interface can expose database-specific features as regular extension functions. Note that you cannot perform any database functions using the PDO extension by itself; you must use a database-specific PDO driver to access a database server.<br><br>
  PDO provides a data-access abstraction layer, which means that, regardless of which database you're using, you use the same functions to issue queries and fetch data. PDO does not provide a database abstraction; it doesn't rewrite SQL or emulate missing features. You should use a full-blown abstraction layer if you need that facility.<br><br>
  PDO ships with PHP.
</p>

<?php
  print "<hr>";

  // Faz, automaticamente, os includes dos módulos necessários usando o autoload.
  // Conforme especificado no composer.json, o composer vai definir o padrão de
  // carregamento psr-4 e, tudo que estiver no diretório App/ será carregado
  // automaticamente.
  require_once "vendor/autoload.php";

  if (isset($_GET['inserir'])):
    $produto = new \App\Model\Produto();
    $produto->setNome('Teclado logitech');
    $produto->setDescricao('Com leds');

    $produtoDao = new \App\Model\ProdutoDao();
    $produtoDao->create($produto);
    echo "Inserido!!";
  endif;

  if (isset($_GET['atualizar'])):
    $produto = new \App\Model\Produto();
    $produto->setId(5);
    $produto->setNome('Monitor Samsung');
    $produto->setDescricao('23 polegadas');

    $produtoDao = new \App\Model\ProdutoDao();
    $produtoDao->update($produto);
  endif;

  if (isset($_GET['deletar'])):
    $produtoDao = new \App\Model\ProdutoDao();
    $id = 6;
    $produtoDao->delete($id);
  endif;

  echo "<h3>Produtos</h3>";
  $produtoDao = new \App\Model\ProdutoDao();
  foreach ($produtoDao->read() as $produto):
    echo "(".$produto['id'].") ";
    echo $produto['nome']."<br>";
    echo $produto['descricao']."<br><br>";
  endforeach;
?>

</body>
</html>