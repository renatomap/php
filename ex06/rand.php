<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Jogo da sorte</title>
  <style>
    body {
      text-align: center;
    }
  </style>
</head>
<body>
    <h1>Jogo da Sorte</h1><hr>
  <h2>Digite um número entre 1 e 10</h2>
  <form action="rand.php" method="post">
    <input type="text" name="num" id="num" size="5">
    <button class="button">Sortear</button>
  </form>
<?php
// $num - variável que recebe o valor digitado no campo
  $num = $_POST["num"]; 
  $vetor = []; 
  for($i = 0; $i < 11; $i++) {
    // rand() - função que gera números aleatórios
    $vetor[$i] = rand(1, 10); 
    if($num > 0 && $num < 11) {
      if($num == $vetor[$i]) {
        echo "<h3 style='color:green;'>PARABÉNS!<br>O número $num foi sorteador.<h3>";
      } else {
        echo "<h3 style='color:blue;'>TENTE NOVAMENTE<br>O número $num não foi sorteador.<h3>";
      }
      break;
    } else {
      echo "<h3 style='color:red;'>O número $num é inválido.<h3>";
      break;
    }
  }
?>
</body>
</html>