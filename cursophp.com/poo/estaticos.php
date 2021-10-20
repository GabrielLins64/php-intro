<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Constantes, Self e Parent</h2>";

echo '

class Login<br>
{<br>
&emsp;<span style="color: gray">// Atributos e Métodos estáticos são acessíveis sem a necessidade da instanciação da classe.<br></span>
&emsp;public static $user;<br>
<br>
&emsp;public static function verificaLogin()<br>
&emsp;{<br>
&emsp;&emsp;echo "O usuário ".self::$user." está logado!";<br>
&emsp;}<br>
}<br>
<br>
Login::$user = "admin";<br>
Login::verificaLogin();<br>

<br>';

echo "<div style='color: green'>Resultado:<br>";

class Login
{
  // Atributos e Métodos estáticos são acessíveis sem a necessidade da instanciação da classe.
  public static $user;

  public static function verificaLogin()
  {
    echo "O usuário ".self::$user." está logado!<br>";
  }
}

Login::$user = "admin";
Login::verificaLogin();

echo "</div><br>";

