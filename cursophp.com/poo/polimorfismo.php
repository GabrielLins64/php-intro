<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Polimorfismo</h2>";

echo '

class Animal<br>
{<br>
&emsp;public function andar()<br>
&emsp;{<br>
&emsp;&emsp;echo "O animal andou";<br>
&emsp;}<br>
}<br>
<br>
class Cavalo extends animal<br>
{<br>
&emsp;<span style="color: gray">// Polimorfismo é a reescrita de um método herdado<br></span>
&emsp;public function Andar()<br>
&emsp;{<br>
&emsp;&emsp;echo "O cavalo andou";<br>
&emsp;}<br>
}<br>
<br>
$animal = new Cavalo();<br>
$animal->andar();<br>

<br>';

echo "<div style='color: green'>Resultado:<br>";

class Animal
{
    public function andar()
    {
        echo "O animal andou<br>";
    }
}

class Cavalo extends Animal
{
    // Polimorfismo é a reescrita de um método herdado
    public function andar()
    {
        echo "O cavalo andou<br>";
    }
}

$animal = new Cavalo();
$animal->andar();

echo "</div><br>";

?>
