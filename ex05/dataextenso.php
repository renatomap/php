<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Data por extenso</title>
  <link rel="stylesheet" href="style.css">
</div>
</head>
<body>
  <div class="form">
    <form action="dataextenso.php" method="post">
      Dia <input type="text" name="dia" size="5">
      Mês <input type="text" name="mes" size="5">
      Ano <input type="text" name="ano" size="5">
      <button type="submit">Converter</button>
    </form>
</body>
</html>
<?php

  $dia = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31];
  $mes = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
  $ano = [2020, 2021, 2022, 2023, 2024, 2025];

  $dia_selec = @$_POST["dia"];
  $mes_selec = @$_POST["mes"];
  $ano_selec = @$_POST["ano"];

  // echo "Dia: " . $dia_selec . "<br>";
  // echo "Mês: " . $mes_selec . "<br>";
  // echo "Ano: " . $ano_selec . "<br>";

  $dia_extenso = "";
  $mes_extenso = "";
  $ano_extenso = "";

  for($i = 0; $i < count($dia); $i++){
    if($dia_selec == $dia[$i]){
      $dia_extenso = $dia[$i];
    }
  }
  // echo "O dia ".$dia_extenso . "<br>";
  for($i = 0; $i < count($mes); $i++){
    if($mes_selec == $mes[$i]){
      $mes_extenso = $mes[$i];
    }
  }
  for($i = 0; $i < count($ano); $i++){
    if($ano_selec == $ano[$i]){
      $ano_extenso = $ano[$i];
    }
  }
  echo strftime("%e de %B de %Y", strtotime("$mes_extenso/$dia_extenso/$ano_extenso"));
?>
