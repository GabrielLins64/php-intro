<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
// Arrays:
echo "<h2>Arrays</h2><hr>";

// Arrays simples
echo "<h3>Arrays simples</h3>";
$carros = array("BMW", "Ferrari", "Murciélago", 5=>"Clio");
$carros[] = "Amarok";
$carros[10] = "Civic";
print_r($carros);
echo "<br>";
echo "Tamanho do array: ".count($carros);

echo "<br><br>";
echo "<b>Foreach:</b><br><br>";
foreach($carros as $valor) {
  echo $valor."<br>";
}

// Arrays associativos
echo "<hr>";
echo "<h3>Arrays associativos</h3>";
$pessoa = array("nome"=> "Gabriel", "idade"=> 25, "altura"=> 1.70);
$pessoa["cidade"] = "Fortaleza";

foreach($pessoa as $indice => $valor) {
  echo $indice.": ".$valor."<br>";
}

// Arrays multidimensionais
echo "<hr>";
echo "<h3>Arrays multidimensionais</h3>";
$times = array(
  "cariocas"=> array("vasco", "flamengo", "botafogo"),
  "paulistas"=> array("santos", "sao paulo", "palmeiras"),
  "baianos"=> array("bahia", "vitoria"),
);

foreach($times as $indice => $valor) {
  echo $indice.": ";
  foreach($times[$indice] as $time) {
    echo $time." ";
  }
  echo "<br>";
}

// Funções de arrays
echo "<hr>";
echo "<h3>Funções de arrays</h3>";

// implode
echo "<b>implode(\", \", \$nomes)</b><br>";
$nomes = array("Rodrigo", "Felipe", "Maria", "José");
echo implode(", ", $nomes)."<br>";

// is_array
echo "<br><b>is_array(\$nomes)</b><br>";
echo "var_dump em is_array: ";
var_dump(is_array($nomes));
echo "<br>";

// in_array
echo "<br><b>in_array(\"José\", \$nomes)</b><br>";
echo "José ". (in_array("José", $nomes) ? 'está' : 'não está') ." no array.<br>";

// array_keys / array_values
echo "<br><b>array_keys(\$pessoa) / array_values(\$pessoa)</b><br>";
echo "Array \$pessoa (keys): ".implode(", ", array_keys($pessoa))."<br>";
echo "Array \$pessoa (values): ".implode(", ", array_values($pessoa))."<br>";

// array_merge
echo "<br><b>array_merge(\$nomes, \$carros)</b><br>";
print_r(array_merge($nomes, $carros));
echo "<br>";

// array_pop
echo "<br><b>array_pop(\$nomes)</b><br>";
print_r($nomes);
echo "<br>Pop: ".array_pop($nomes)."<br>";
print_r($nomes);
echo "<br>";

// array_shift
echo "<br><b>array_shift(\$nomes)</b><br>";
print_r($nomes);
echo "<br>Shift: ".array_shift($nomes)."<br>";
print_r($nomes);
echo "<br>";

// array_unshift
echo "<br><b>array_unshift(\$nomes, \"John\", \"Jeff\")</b><br>";
print_r($nomes);
echo "<br>Shift: ".array_unshift($nomes, "John", "Jeff")."<br>";
print_r($nomes);
echo "<br>";

// array_combine
echo "<br><b>array_combine(\$nomes, \$pessoa)</b><br>";
print_r(array_combine($nomes, $pessoa));
echo "<br>";

// array_push
echo "<br><b>array_push(\$nomes, \"Bob\", \"Lila\")</b><br>";
print_r($nomes);
echo "<br>push: ".array_push($nomes, "Bob", "Lila")."<br>";
print_r($nomes);
echo "<br>";

// array_sum
echo "<br><b>array_sum(\$soma)</b><br>";
$soma = array(5, 6, 10, -7);
echo '$soma: '; print_r($soma);
echo "<br>soma: ".array_sum($soma);
echo "<br>";

// explode
echo "<br><b>explode(\"/\", \$data)</b><br>";
$data = "04/10/2021";
echo '$data: '."$data";
echo "<br>explode: "; print_r(explode("/", $data));
echo "<br>";

// implode
echo "<br><b>implode(\", \", \$nomes)</b><br>";
echo '$nomes: '; print_r($nomes);
echo "<br>implode: "; print_r(implode(", ", $nomes));
echo "<br>";

?>
