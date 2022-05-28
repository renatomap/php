<?php
session_start();
    echo"<h2 align='center'>QUESTIONÁRIO</h2>";
    if(@$_POST['btn'] == 'btn2') {
        session_destroy();
    }
    if(@$_POST["btn"]=='btn1'){
        calcular();
    }
    function calcular(){
      if( @$_POST["r1"] == "j"){
        @$_SESSION['java']++;
    }
        if(@$_POST["r1"] == "p"){
        @$_SESSION['php']++;
    }
        if(@$_POST["r1"] == "y"){
        @$_SESSION['python']++;
    }
      @$_SESSION['total'] = @$_SESSION['java'] + @$_SESSION['php'] + @$_SESSION['python'];
    }
?>
<fieldset>
    <legend>Questão1</legend>
    <form method="post">
        Qual linguagem você trabalha?<br>
        <input type="radio" name="r1" value="j"> JAVA<br>
        <input type="radio" name="r1" value="p"> PHP<br>
        <input type="radio" name="r1" value="y"> PYTHON<br>
        <button type="submit" name="btn" value="btn1">ENVIAR</button>
        <!-- <input type="reset" value="btn" value="btn2">Limpar</button> -->
        <button type="submit" name="btn" value="btn2">Limpar</button>
    </form>
</fieldset>
<?php $java = number_format(@$_SESSION['java']/@$_SESSION['total']*100)?>
<?php $php = number_format(@$_SESSION['php']/@$_SESSION['total']*100)?>
<?php $python = number_format(@$_SESSION['python']/@$_SESSION['total']*100)?>

JAVA - <?php echo $java. "%"?><hr size='10' color='red' width=<?php echo $java. "%"?>>
PHP - <?php echo $php. "%"?> <hr size="10" color="green" width=<?php echo $php. "%"?>>
PYTHON - <?php echo $python. "%"?> <hr size="10" color="blue" width=<?php echo $python. "%"?>>