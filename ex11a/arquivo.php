<?php 
  echo "<p align='center'>Atividade 11 - Aquivo<p>";
  ?>
<div align="center">
  <form method="post">
    <button type="submit" name="btn" value="btn1">Gravar</button>
    <button type="submit" name="btn" value="btn2">Mostrar</button>
    <button type="submit" name="btn" value="btn3">Apagar</button>
  </form>
</div>



<?php
  
  if(@$_POST['btn'] == 'btn1') {
    gravar();
  }
  if(@$_POST['btn'] == 'btn2') {
    mostrar();
  }
  if(@$_POST['btn'] == 'btn3') {
    @session_destroy();
  }
  
  function gravar() {
    $aquivo = fopen('contador.txt', 'a');
    $conteudo = "\r\nexercicio 11 - PHP\r\n";
    date_default_timezone_set('America/Fortaleza');
    $data = date('d-m-Y | H:i:s');
    fwrite($aquivo, $conteudo);
    fwrite($aquivo, $data);
  }
  function mostrar() {
    $arq = file('contador.txt');
    foreach($arq as $dados) {
        echo $dados;
        echo '<br>';
    }
  }
  
?>