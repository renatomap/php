<html>
  <head>
    <title>Calculadora - function</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <fieldset class="fieldset">
      <caption><p class="calc">Calculadora com Function</p></caption>
      <form action="calculadora.php" mothed="get" id="calc">
    <input type="text" name="num1" size="5">
    <select name="operador" id="op">
      <option value="soma">somar</option>
      <option value="subtracao">subtrair</option>
      <option value="multiplicacao">multiplicar</option>
      <option value="divisao">dividir</option>
    </select>
    <input type="text" name="num2" size="5">
    <button type="submit" form="calc" value="submit">calcular</button>
    </form>
    </fieldset>
    
    
  </body>
</html>
<?php
  // Calculadora com function
  $n1 = @$_GET["num1"];
  $n2 = @$_GET["num2"];
  $op = @$_GET["operador"];

  function calcular($n1, $n2, $op) {
    if($op == "soma") {
      return $n1 + $n2;
    } else if($op == "subtracao") {
      return $n1 - $n2;
    } else if($op == "multiplicacao") {
      return $n1 * $n2;
    } else {
      return $n1 / $n2;
    }
  }
  // var_dump($n1);
  // var_dump($n2);
  // var_dump($op);
  echo "<p>O resultado é: " . calcular($n1, $n2, $op) . "</p>";
?>