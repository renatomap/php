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
    $sal = [1500, 3000, 800, 1000];
    $cargo = ["gerente", "engenheiro", "estagiario", "técnico"];
    
    $novoSal = 0;
    // for - percorre o vetor
    for($i = 0 ; $i < count($sal); $i++){
        // switch() - verifica o valor do índice do vetor
        switch($i) {
            case 0:
                $aumento = $sal[$i] * 0.1;
                $novoSal = $sal[$i] + $aumento;
                echo "<h2>O $cargo[$i] recebeu um aumento de R$$aumento e seu salário foi de R$$sal[$i] e agora é de R$$novoSal.</h2>";
                break;
            case 1:
                $aumento = $sal[$i] *0.2;
                $novoSal = $sal[$i] + $aumento;
                echo "<h2>O $cargo[$i] recebeu um aumento de R$$aumento e seu salário foi de R$$sal[$i] e agora é de R$$novoSal.</h2>";
                break;
            case 2:
                $aumento = $sal[$i] * 0.3;
                $novoSal = $sal[$i] + $aumento;
                echo "<h2>O $cargo[$i] recebeu um aumento de R$$aumento e seu salário foi de R$$sal[$i] e agora é de R$$novoSal.</h2>";
                break;
            case 3:
                $aumento = $sal[$i] * 0.4;
                $novoSal = $sal[$i] + $aumento;
                echo "<h2>O $cargo[$i] recebeu um aumento de R$$aumento e seu salário foi de R$$sal[$i] e agora é de R$$novoSal.</h2>";
                break;
        }
    }
?>