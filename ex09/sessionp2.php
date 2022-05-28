

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SisIFPI</title>
    <style>
        body {
            background-color: #d1d1d1;
            font-family: Arial, Helvetica, sans-serif;
        }
        .sis {
            background-color: rgb(17, 170, 170);
            padding: 5px;
            color: white;
        }
        .menu {
            background-color: rgb(16 206 171 / 80%);
            padding: 10px;
        }
        
    </style>
</head>
<body>
    <div class="sis">
        <h1>SisIFPI</h1>
    </div>
    <div class="menu">
        <a href="telaLogin.php"><button>Inicio</button></a>
        <button type="reset" value="">Sair</button>
    </div>
</body>
</html>

<?php
    session_start();
    echo "O usuário : " . @$_SESSION["user"];
    echo "<br>";
    // echo @$_SESSION["pass"];
    if(@$_SESSION["pass"] == 12345) {
        echo "Login ok!";
    }

?>    