<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Include e Require</h2>";

echo "<hr><h3>Include</h3>";

echo '
include "outro_arquivo.php";<br>
include "naoexiste.php"; // Retorna um warning no console<br>
include "outro_arquivo.php";<br>
include_once "outro_arquivo.php";<br>
<br>';

echo "<div style='color: green'>Resultado:<br>";
include 'outro_arquivo.php';
include 'naoexiste.php'; // Retorna um warning no console
include 'outro_arquivo.php';
include_once 'outro_arquivo.php';
echo "</div><br>";

echo "<hr><h3>Require</h3>";

echo '
require "outro_arquivo.php";<br>
require "outro_arquivo.php";<br>
require_once "outro_arquivo.php";<br>
<span style="color: gray">// require "naoexiste.php"; // Retorna um erro e para o script<br></span>
<br>';

echo "<div style='color: green'>Resultado:<br>";
require 'outro_arquivo.php';
require 'outro_arquivo.php';
require_once 'outro_arquivo.php';
// require 'naoexiste.php'; // Retorna um erro e para o script
echo "</div><br>";

?>
