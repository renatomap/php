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

    $ordemNum = [52, 10, 155,];
    // sort() - ordena o vetor em ordem crescente
    sort($ordemNum);

    // count() - conta o número de elementos do vetor
    for($i = 0; $i < count($ordemNum); $i++){
        if($i == 0){
            echo "<h2><font color='gray'>É o menor valor $ordemNum[$i].</font><br></h2>";
        }else if($i == 1){
            echo "<h2><font color='gray'>É o valor intermediário $ordemNum[$i].</font><br></h2>";
        }else{
            echo "<h2><font color='red'>É o maior valor $ordemNum[$i].</font></h2>";;
        }    
    }

?>