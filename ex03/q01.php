
<?php
    echo "Digite um número: 4<br>";
    $array = array(2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);

    echo "Saída do programa:<br>";
    for($i = 0; $i < 4; $i++) {
        if($i == 0) {
            echo "1<br>";
        } else if($i == 1) {
            echo "12<br>";
        } else if($i == 2) {
            echo "123<br>";
        } else if($i == 3) {
            echo "1234<br>";
        } elseif($i == 4) {
            echo "12345<br>";
        } elseif($i == 5) {
            echo "123456<br>";
        }
    }

    for($i = 4; $i >= 0; $i--) {
        if($i  == 0) {
            echo "1<br>";
        } else if($i == 1) {
            echo "12<br>";
        } else if($i == 2) {
            echo "123<br>";
        } else if($i == 3) {
            echo "1234<br>";
        } elseif($i == 4) {
            echo "12345<br>";
        } elseif($i == 5) {
            echo "123456<br>";
        }
    }
?>