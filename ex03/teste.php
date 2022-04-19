
<?php
   $numero = 92;
   while($numero < 1478) {
     echo "$numero<br>";
     $numero++;
   }
   $divisor = 0;
   for($i = 1; $i <= $numero; $i++) {
     if($numero % $i == 0) {
       $divisor++;
    }
   }if($divisor == 0 || $numero == 1) {
     echo "$numero é primo";
   } else {
     echo "$numero não é primo";
   }
?>