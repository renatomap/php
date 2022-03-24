

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão02</title>
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
        $num = 15;
        
        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                echo "<h2>O $i é divisor de $num </h2>";
            }
        }
        
        ?>
    </div>
</body>
</html>
            