<?php
    session_start();
    // echo "<p>SisVoto<p>";
    // echo "<hr>";

    // $c1 = @$_SESSION['can1'];
    // $c2 = @$_SESSION['can2'];

    if(@$_POST['btn'] == 'vt1') {
        @$_SESSION['vt1']++;
        // echo $_SESSION['vt1'];
    }
    if(@$_POST['btn'] == 'vt2') {
        @$_SESSION['vt2'] ++;
        // echo $_SESSION['vt2']; 
    }
    if(@$_POST['btn'] == 'clr') {
        session_destroy();
    }
    // function voto1() {
    //     $c1 = $_SESSION['can1']++;
    //     header("Location:aula10.php");
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sisVoto</title>
</head>
<body>
    <h2>SisVoto</h2>
    <hr>
    <form method="post">
    <div class="btn2">
        Partido 1 <button type="submit" name="btn" value="vt1">votar</button>
    </div>
    <div class="btn2">
        Partido 2 <button type="submit" name="btn" value="vt2">votar</button>
    </div>
    <hr>
    <div class="res">
        <?php echo "Resultado: "?>
        <?php  echo "Partido 1: " . @$_SESSION['vt1']. " votos."?>
        <?php  echo "Partido 2: " . @$_SESSION['vt2'] . " votos."?>
        <button type="submit" name="btn" value="clr" class="btn3">Limpar</button>
    </div>
</form>
</body>
</html>
