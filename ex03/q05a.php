<?php
  /* Números primos entre 92 e 1478 */
  
  $num = 1478;
  $j = 92;
  echo "<h2>Números primos entre 92 e 1478:</h2>";
  while($j <= $num) { // Esse while vai percorrer de $j = 92 até $num = 1478
    $i = 2;
    $primo = 1;
    while($i < $j) { // Esse while vai percorrer de $i = ? até $j = 92
      if($j % $i == 0) { // if/se - $j = 92 for divisível por $i = ?, $primo = 0
        $primo = 0;
      }
      $i++; // incrementa $i
    }
    if($primo == 1) { // if/se - $primo = 1, o número é primo
      echo "$j" . " ";
    }
    $j++; // incrementa $j
  }
?>