<?php
  $chico = 1.50; // altura - 1,50 m
  $cresceChico = 0.02; // crescimento - 0,02 m/ano
  $ze = 1.10; // altura - 2,50 m
  $cresceZe = 0.03; // crescimento - 0,03 m/ano
  
  echo "<h2>Chico tem $chico m de altura e Zé tem $ze m de altura. Chico cresce $cresceChico m/ano e Zé cresce $cresceZe m/ano.<h2>";
  
  $ano = 0 ;
  while($ze < $chico) {
    $chico += $cresceChico;
    $ze += $cresceZe;
    $ano++;
  }
  echo "Em $ano anos, Chico ultrapassará Zé.<br>";
?>