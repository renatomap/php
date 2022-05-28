<!-- Pagina web em PHP com um questionário de 4 perguntas, onde o usuário responderá as perguntas e no final deverá ser emitido o resultado dele, informar quantas perguntas ele acertou. -->

<?php echo '<h2>Questionário</h2>'?>
<?php
  session_start();
  if(@$_POST['btn'] == 'btn2') {
    session_destroy();
  }
  if(@$_POST['btn'] == 'v1') {
    calcular();
  }
  function calcular() {
    (@$_POST['1'] == 's')? @$_SESSION['Sublime']++ : @$_SESSION[''];
    (@$_POST['1'] == 'n')? @$_SESSION['Notepad++']++ : @$_SESSION[''];
    (@$_POST['1'] == 'v')? @$_SESSION['Visual Studio Code']++ : @$_SESSION[''];
    (@$_POST['1'] == 'o')? @$_SESSION['Outro']++ : @$_SESSION[''];
  }
  // if(@$_POST['btn'] == 'v2') {
  //   calcular2();
  // }
  // function calcular2() {
  //   (@$_POST['2'] == 'p')? @$_SESSION['Php']++ : @$_SESSION[''];
  //   (@$_SESSION['2'] == 'js')? @$_SESSION['JavaScript']++ : @$_SESSION[''];
  //   (@$_SESSION['2'] == 'python')? @$_SESSION['Python']++ : @$_SESSION[''];
  //   (@$_SESSION['2'] == 'o2')? @$_SESSION['Outro']++ : @$_SESSION[''];
  // }
  @$subli += @$_SESSION['Sublime'];
  @$note += @$_SESSION['Notepad++'];
  @$visu += @$_SESSION['Visual Studio Code'];
  @$outro += @$_SESSION['Outro'];
  // @$php += @$_SESSION['Php'];
  // @$js += $_SESSION['JavaScript'];
  // @$python += $_SESSION['Python'];
  // @$outro2 += $_SESSION['Outro'];

  $total = @$_SESSION['Sublime'] + @$_SESSION['Notepad++'] + @$_SESSION['Visual Studio Code'] + @$_SESSION['Outro'];
  // $total2 = @$_SESSION['Php'] + @$_SESSION['JavaScript'] + @$_SESSION['Python'] + @$_SESSION['Outro'];
  echo '<p>O total de votos: '.$total.'<p>';

?>
<!-- q01 -->
<fieldset>
  <legend>Questão 01</legend>
  <p>Qual é o editor de código de sua preferência?</p>
  <form method="post">
    <input type="radio" name="1" value="s" checked="checked"> Sublime <br>
    <input type="radio" name="1" value="n"> Notepad++ <br>
    <input type="radio" name="1" value="v"> Visual Studio Code <br>
    <input type="radio" name="1" value="o"> Outro <br>
    <button type="submit" name="btn" value="v1">Votar</button>
    <button type="submit" name="btn" value="btn2">Limpar</button>
    </form>
    Sublime - <?php echo $porc = number_format(@$subli/ @$total * 100, 0).'%' ?> <hr size="10" color="red" width="<?php echo $porc ?>" align="left">
    Notepad++ - <?php echo $porc = number_format(@$note/ @$total * 100, 0).'%'?> <hr size="10" color="blue" width="<?php echo $porc?>" align="left">
    Visual Studio Code - <?php echo $porc = number_format(@$visu/ @$total * 100, 0).'%'?><hr size="10" color="green" width="<?php echo $porc ?>" align="left">
    Outro - <?php echo $porc = number_format(@$outro/ @$total * 100, 0).'%'?><hr size="10" color="pink" width="<?php echo $porc ?>" align="left">
</fieldset>
  <!-- q02 -->
  <?php
  
  ?>
  <!-- <fieldset>
    <legend>Questão 02</legend>
    <p>Qual é a liguagem de porgramação se sua preferência?</p>
    <form method="post">
      <input type="radio" name="2" value="p"> PHP <br>
      <input type="radio" name="2" value="js"> JavaScript <br>
      <input type="radio" name="2" value="y"> Python <br>
      <button type="submit" name="btn" value="v2">Votar</button>
      <button type="submit" name="btn" value="btn2">Limpar</button>
    </form>
    PHP - <?php echo $porc = number_format(@$php/ @$total2 * 100, 0).'%' ?> <hr size="10" color="red" width="<?php echo $porc ?>" align="left">
    Notepad++ - <?php echo $porc = number_format(@$js/ @$total2 * 100, 0).'%'?> <hr size="10" color="blue" width="<?php echo $porc?>" align="left">
    Visual Studio Code - <?php echo $porc = number_format(@$python/ @$total2 * 100, 0).'%'?><hr size="10" color="green" width="<?php echo $porc ?>" align="left">
    Outro - <?php echo $porc = number_format(@$outro2/ @$total2 * 100, 0).'%'?><hr size="10" color="pink" width="<?php echo $porc ?>" align="left">
  </fieldset> -->