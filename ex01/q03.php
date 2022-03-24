<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão03</title>

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
        $sal = 250;
        $novoSal = 0;

        if ($sal <= 300) {
            $novosal = ($sal * 0.5);
            echo "<h2>O novo salário " . ($novosal + $sal) . ".</h2>";
        } else {
            $novosal = ($sal * 0.3);
            echo "<h2>O novo salário " . ($novosal + $sal) . ".</h2>";
        }
        ?>
    </div>
</body>

</html>