<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
// Escopo de Variáveis:
echo "<h2>Escopo de Variáveis</h2><hr>";

// Escopo global
$nome = "Gabriel";

function exibeNome()
{
  global $nome;
  echo $nome;
}

exibeNome();
echo "<hr>";

function exibeCidade()
{
  // Define uma variável no escopo global, mesmo dentro da função
  global $cidade;
  $cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;
echo "<hr>";

$a = 1;
$b = 3;
$c = 7;

function soma()
{
  // Outra forma de acessar variáveis globais (Array GLOBALS)
  echo "Soma: " . $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();

?>