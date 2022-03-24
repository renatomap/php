<style> 
    h2 {
        background-color: aquamarine;
        text-align: center;
        font-size: 4em;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        box-shadow: 10px 10px 5px palegoldenrod;
        border-radius: 2px 25px;
        }
</style>
<?php
    $x1 = 1;
    $x2 = 5;

    $y1 = 4;
    $y2 = 8;
    // sqrt() - raiz quadrada
    // pow() - potenciação
    $distancia = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

    echo  "<h2>A distância entre os P($x1, $y1) e P($x2, $y2) é: $distancia </h2>";

?>