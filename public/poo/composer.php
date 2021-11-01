<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Composer</h2>";

echo '

$path = substr($_SERVER["DOCUMENT_ROOT"], 0, strrpos($_SERVER["DOCUMENT_ROOT"], "/"));<br>
require $path."/vendor/autoload.php";<br>
<br>
use Cocur\Slugify\Slugify;<br>
<br>
$slug = new Slugify();<br>
echo $slug->slugify("Teste com acentuação para geração de slug");<br>

<br>';

echo "<div style='color: green'>Resultado:<br>";

$path = substr($_SERVER['DOCUMENT_ROOT'], 0, strrpos($_SERVER['DOCUMENT_ROOT'], '/'));
require $path."/vendor/autoload.php";

use Cocur\Slugify\Slugify;

$slug = new Slugify();
echo $slug->slugify('Teste com acentuação para geração de slug')."<br>";

echo "</div><br>";

?>
