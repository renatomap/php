<?php
  session_start();
  // var_dump($_POST);
  echo "<p>Erro no login!<p>";

  $user = "renato";
  $senha = 12345;

  if(@$_POST['btn'] == 'btn1') {
      $senha1 = @$_POST['senha'];
      if($senha1 == $senha) {
          $_SESSION['user'] = $user;
          $_SESSION['pass'] = $senha1;
          Header("Location:sessionpagina2.php");
      }
  }

?>
<a href="telaLogin.php">Voltar no login.</a>