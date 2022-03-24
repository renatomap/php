<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão04</title>
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
</head>

<body>
    <div>
        <?php
        $altura = 1.80;
        $sexo = "Mas";
        $sexo = "Fem";

        $pesoMas = (72.7 * $altura) - 58;
        $pesoFem = (62.1 * $altura) - 44.7;

        echo "<h2>O peso ideal para homem é $pesoMas<br/></h2>";
        echo "<h2>O peso ideal para mulher é $pesoFem</h2>";
        ?>
    </div>
</body>

</html>