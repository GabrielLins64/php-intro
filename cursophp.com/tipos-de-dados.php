<button type="button" onclick="location.href='/';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
// Tipos de Dados:
echo "<h2>Tipos de Dados</h2><hr>";

// ---------- X Escalares X ---------- 
echo "<h3>Escalares</h3>";

// - string
$nome = "Olá mundo 123 !@#";
var_dump($nome);
echo "<br>";
if (is_string($nome)):
  echo "É uma string!<br>";
else:
  echo "Não é uma string!<br>";
endif;
echo "<br>";

// - int
$idade = 27;
var_dump($idade);
echo "<br>";
if (is_int($idade)):
  echo "É um int!<br>";
else:
  echo "Não é um int!<br>";
endif;
echo "<br>";

// - float
$altura = 1.77;
var_dump($altura);
echo "<br>";
if (is_float($altura)):
  echo "É um float!<br>";
else:
  echo "Não é um float!<br>";
endif;
echo "<br>";

// - boolean
$admin = true;
var_dump($admin);
echo "<br>";
if (is_bool($admin)):
  echo "É um bool!<br>";
else:
  echo "Não é um bool!<br>";
endif;
echo "<br>";

// ---------- X Compostos X ---------- 
echo "<hr><h3>Compostos</h3>";

// - array
$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);
var_dump($carros);
echo "<br>";
if (is_array($carros)):
  echo "É um array!<br>";
else:
  echo "Não é um array!<br>";
endif;
echo "<br>";

// - object
class Cliente {
  public $nome;
  public function atribuirNome($nome) {
    $this->$nome = $nome;
  }
}

$cliente = new Cliente();
var_dump($cliente);
echo "<br>";
$cliente->atribuirNome("Gabriel");
var_dump($cliente);
echo "<br>";
if (is_object($cliente)):
  echo "É um objeto!<br>";
else:
  echo "Não é um objeto!<br>";
endif;
echo "<br>";

// ---------- X Compostos X ---------- 
echo "<hr><h3>Especiais</h3>";

// - NULL
$cidade = NULL;
var_dump($cidade);
echo "<br>";
if (is_null($cidade)):
  echo "É nulo!<br>";
else:
  echo "Não é nulo!<br>";
endif;
echo "<br>";

// - resource
?>