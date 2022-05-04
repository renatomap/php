<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title>Calculadora</title>
  <link rel="stylesheet" href="style.css">
  <style>
    h1 {
    background-color: #de2121;
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color: white;
    margin-bottom: 0px;
    border-top-width: 50px;
    padding-top: 10px;
    padding-right: 10px;
    padding-left: 10px;
  }
  form {
    background-color: #de2121;
    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    padding: 20px;
  }
  button:hover {
    background-color: #990000be;
    color: white;
  }
  body {
    background-color: aqua;
  }
</style>
</head>
<body>
  <nav>
    <h1>Calculadora com Switch</h1>
  </nav>
  <main>
    <form action="calculadora.php" method="post">
      <input type="text" name="num1" size="5">
      <input type="text" name="num2" size="5">
      <select id="op" name="operacao">
        <option value="soma">Soma</option>
        <option value="subtracao">Subtração</option>
        <option value="multiplicacao">Multiplicação</option>
        <option value="divisao">Divisão</option>
      </select>
      <button>Calcular</button>
  </main>

  <?php
  // Calculadora com Switch
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operacao = $_POST['operacao'];

  switch ($operacao) {
    case 'soma':
      $resultado = $num1 + $num2;
      echo "<p>A soma é: $resultado</p>";
      break;
    case 'subtracao':
      $resultado = $num1 - $num2;
      echo "<p>A subtração é: $resultado</p>";
      break;
    case 'multiplicacao':
      $resultado = $num1 * $num2;
      echo "<p>A multiplicação é: $resultado</p>";
      break;
    case 'divisao':
      $resultado = $num1 / $num2;
      echo "<p>A divisão é: $resultado</p>";
      break;
    default:
      $resultado = "<p>Operação inválida</p>";
      break;
  }
  ?>
</body>
</html>