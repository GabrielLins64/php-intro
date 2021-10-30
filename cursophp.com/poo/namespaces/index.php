<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Namespaces</h2>";

echo '

<span style="color: gray"> ------- classes/produto.php ------- </span><br>
namespace classes;<br>
<br>
class Produto<br>
{<br>
&emsp;public function mostrarDetalhes()<br>
&emsp;{<br>
&emsp;&emsp;echo "Detalhes do produto da pasta classes";<br>
&emsp;}<br>
}<br><br>

<span style="color: gray"> ------- models/produto.php ------- </span><br>
namespace models;<br>
<br>
class Produto<br>
{<br>
&emsp;public function mostrarDetalhes()<br>
&emsp;{<br>
&emsp;&emsp;echo "Detalhes do produto da pasta models";<br>
&emsp;}<br>
}<br><br>

<span style="color: gray"> ------- index.php ------- </span><br>
require "classes/produto.php";<br>
require "models/produto.php";<br>
<br>
$produto = new \classes\Produto();<br>
$produto->mostrarDetalhes();<br>
<br>
use models\Produto;<br>
$produto2 = new Produto();<br>
$produto2->mostrarDetalhes();<br>
<br>
use classes\Produto as produtoClasses;<br>
$produto3 = new produtoClasses();<br>
$produto3->mostrarDetalhes();<br>

<br>';

echo "<div style='color: green'>Resultado:<br>";

require 'classes/produto.php';
require 'models/produto.php';

$produto = new \classes\Produto();
$produto->mostrarDetalhes();

use models\Produto;
$produto2 = new Produto();
$produto2->mostrarDetalhes();

use classes\Produto as produtoClasses;
$produto3 = new produtoClasses();
$produto3->mostrarDetalhes();

echo "</div><br>";

?>
