<?php
  $num = 1478;

  $j = 92;
  while($j <= $num) {
    $i = 2;
    $primo = 1;
    while($i < $j) {
      if($j % $i == 0) {
        $primo = 0;
      }
      $i++;
    }
    if($primo == 1) {
      echo "$j<br>";
    }
    $j++;
  }
?>