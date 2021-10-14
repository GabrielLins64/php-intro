<button type="button" onclick="location.href='/';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Datas</h2>";

echo "<hr><h3>Parâmetros de datas</h3>";

echo '
echo "Hora (formato de 12h): ".date("h");<br>
echo "Hora (formato de 24h): ".date("H");<br>
echo "Minutos: ".date("i");<br>
echo "Segundos: ".date("s");<br>
echo "AM / PM: ".date("A");<br>
echo "Dia: ".date("d");<br>
echo "Dia da semana: ".date("D");<br>
echo "Dia da semana (completo): ".date("l");<br>
echo "Mês: ".date("m");<br>
echo "Mês (Texto): ".date("M");<br>
echo "Ano: ".date("y");<br>
echo "Ano (4 dígitos): ".date("Y");<br>
echo "Data completa: ".date("d/m/Y - h:i:s A");<br>
<br>';

echo "<div style='color: green'>Resultado:<br>";
echo "Hora (formato de 12h): ".date('h')."<br>";
echo "Hora (formato de 24h): ".date('H')."<br>";
echo "Minutos: ".date('i')."<br>";
echo "Segundos: ".date('s')."<br>";
echo "AM / PM: ".date('A')."<br>";
echo "Dia: ".date('d')."<br>";
echo "Dia da semana: ".date('D')."<br>";
echo "Dia da semana (completo): ".date('l')."<br>";
echo "Mês: ".date('m')."<br>";
echo "Mês (Texto): ".date('M')."<br>";
echo "Ano: ".date('y')."<br>";
echo "Ano (4 dígitos): ".date('Y')."<br>";
echo "Data completa: ".date('d/m/Y - h:i:s A')."<br>";
echo "</div><br>";

echo "<hr><h3>Setando a timezone</h3>";

echo '
echo "Timezone atual: ".date_default_timezone_get();<br>
echo "Setando a timezone: ".date_default_timezone_set("America/Sao_Paulo");<br>
<br>';

echo "<div style='color: green'>Resultado:<br>";
echo "Timezone atual: ".date_default_timezone_get()."<br>";
echo "Setando a timezone: ".date_default_timezone_set("America/Sao_Paulo")."<br>";
echo "</div><br>";

echo "<hr><h3>Formato de data no banco de dados (SQL)</h3>";

echo '
Para DATE:<br>
date(\'Y-m-d\'); &ndash;
<span style="color: green"> '.date('Y-m-d').' </span><br><br>
Para DATETIME:<br>
date(\'Y-m-d H:i:s\'); &ndash;
<span style="color: green"> '.date('Y-m-d H:i:s').' </span><br><br>
<br>';

echo "<hr><h3>Formatando tempo</h3>";

echo '
<b>Função time()</b><br>
Retorna a quantidade de segundos passados desde a época Unix &ndash; <b>Posix time ou
UNIX Epoch time</b> &ndash; (00:00:00 UTC em 1o de Janeiro de 1970).<br>
time() &ndash;
<span style="color: green"> '. time() .' </span><br><br>

$time = time();<br>
date("d/m/Y", $time) &ndash;
<span style="color: green"> '. date("d/m/Y", time()) .' </span><br><br>

<b>Make Time</b><br>
$data_pgto = mktime(15, 30, 00, 02, 15, 2023);<br>
date("d/m/y - h:i", $data_pgto); &ndash;
<span style="color: green"> '. date("d/m/y - h:i", mktime(15, 30, 00, 02, 15, 2023)) .' </span><br><br>

<b>STRTOTIME()</b><br>
$data = "2019-04-10 13:30:00";<br>
date("d/m/Y", strtotime($data)); &ndash;
<span style="color: green"> '. date("d/m/y", strtotime("2019-04-10 13:30:00")) .' </span><br><br>

<br>';

?>
