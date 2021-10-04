<button type="button" onclick="location.href='/';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
// Constantes:
echo "<h2>Constantes</h2><hr>";

define("NOME", "Gabriel Lins");
define("IDADE", 25);
define("ALTURA", 1.70);
define("CASADO", false);
define("CORES", ['azul', 'branco', 'verde']);

echo "Constantes são acessadas sem \" . \"<br><br>";
echo "Nome: ".NOME."<br>";
echo "Idade: ".IDADE."<br>";
echo "Altura: ".ALTURA."<br>";
echo "Casado: " . (CASADO ? 'Sim' : 'Não') ."<br>";
echo "Cores: ".implode(", ", CORES)."<br>";
?>
