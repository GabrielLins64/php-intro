<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Interfaces</h2>";

echo '


interface Crud<br>
{<br>
&emsp;<span style="color: gray">// As diferenças entre interface e classes abstratas, são:</span><br>
&emsp;<span style="color: gray">// em interfaces não existe implementação. Já nas classes</span><br>
&emsp;<span style="color: gray">// abstratas é possível fazer a implementação do corpo de</span><br>
&emsp;<span style="color: gray">// membros e métodos. Bem como, caso um método/atributo</span><br>
&emsp;<span style="color: gray">// seja declarado em uma interface, se torna obrigatória</span><br>
&emsp;<span style="color: gray">// sua implementação na classe implementada.</span><br>
&emsp;public function create($data);<br>
&emsp;public function read();<br>
&emsp;public function update();<br>
&emsp;public function delete();<br>
}<br>
<br>
class Noticias implements Crud<br>
{<br>
&emsp;public function create($data) { echo "create $data"; }<br>
&emsp;public function read() { echo "read"; }<br>
&emsp;public function update() { echo "update"; }<br>
&emsp;public function delete() { echo "delete"; }<br>
}<br>
<br>
$not = new Noticias();<br>
$not->create("data");<br>
$not->read();<br>
$not->update();<br>
$not->delete();<br>


<br>';

echo "<div style='color: green'>Resultado:<br>";

interface Crud
{
  // As diferenças entre interface e classes abstratas, são:
  // em interfaces não existe implementação. Já nas classes
  // abstratas é possível fazer a implementação do corpo de
  // membros e métodos. Bem como, caso um método/atributo
  // seja declarado em uma interface, se torna obrigatória
  // sua implementação na classe implementada.
  public function create($data);
  public function read();
  public function update();
  public function delete();
}

class Noticias implements Crud
{
  public function create($data) { echo "create $data<br>"; }
  public function read() { echo "read<br>"; }
  public function update() { echo "update<br>"; }
  public function delete() { echo "delete<br>"; }
}

$not = new Noticias();
$not->create("dados");
$not->read();
$not->update();
$not->delete();

echo "</div><br>";

?>
