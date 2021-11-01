<meta name="viewport" content="width=device-width, initial-scale=1.0">
<button type="button" onclick="location.href='/poo';">Voltar</button>
<?php
// ---------- X ---------- X ---------- 
echo "<h2>Getters e Setters</h2>";

echo '
class Login {<br>
&emsp;private $email;<br>
&emsp;private $senha;<br>
<br>
&emsp;public function getEmail()<br>
&emsp;{<br>
&emsp;&emsp;return $this->email;<br>
&emsp;}<br>
<br>
&emsp;public function getSenha()<br>
&emsp;{<br>
&emsp;&emsp;return $this->senha;<br>
&emsp;}<br>
<br>
&emsp;public function setEmail($value)<br>
&emsp;{<br>
&emsp;&emsp;$email = filter_var($value, FILTER_SANITIZE_EMAIL);<br>
&emsp;&emsp;$this->email = $email;<br>
&emsp;}<br>
<br>
&emsp;public function setSenha($value)<br>
&emsp;{<br>
&emsp;&emsp;$this->senha = $value;<br>
&emsp;}<br>
<br>
&emsp;public function logar()<br>
&emsp;{<br>
&emsp;&emsp;if ($this->email == "teste@teste.com" and $this->senha == "1234"):<br>
&emsp;&emsp;&emsp;echo "Logado com sucesso!";<br>
&emsp;&emsp;else:<br>
&emsp;&emsp;&emsp;echo "Dados inválidos";<br>
&emsp;&emsp;endif;<br>
&emsp;}<br>
}<br>
<br>
$logar = new Login();<br>
$logar->setEmail("teste()/@teste.com");<br>
$logar->setSenha("1234");<br>
echo "Email: ".$logar->getEmail();<br>
echo "Senha: ".$logar->getSenha();<br>
$logar->logar();<br>
<br>';

echo "<div style='color: green'>Resultado:<br>";

class Login {
  private $email;
  private $senha;

  public function getEmail()
  {
    return $this->email;
  }

  public function getSenha()
  {
    return $this->senha;
  }

  public function setEmail($value)
  {
    $email = filter_var($value, FILTER_SANITIZE_EMAIL);
    $this->email = $email;
  }

  public function setSenha($value)
  {
    $this->senha = $value;
  }

  public function logar()
  {
    if ($this->email == "teste@teste.com" and $this->senha == "1234"):
      echo "Logado com sucesso!<br>";
    else:
      echo "Dados inválidos<br>";
    endif;
  }
}

$logar = new Login();
$logar->setEmail("teste()/@teste.com");
$logar->setSenha("1234");
echo "Email: ".$logar->getEmail()."<br>";
echo "Senha: ".$logar->getSenha()."<br>";
$logar->logar();

echo "</div><br>";

