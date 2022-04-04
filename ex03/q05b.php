<?php
  /* Fatorial de um número */

  $num = 5;
  $fat = 1;
  echo "<h2>Fatorial de $num!:</h2>";
  while($num > 1) {
    $fat *= $num;
    echo "$num x ";
    $num--;
  }
  echo "<br>=$fat ";

?>