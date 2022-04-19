<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Prato do Dia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div >
        <table class="t1">
          <thead>
            <tr class="fundo1">
                <th class="col">Elemento</th>
                <th class="col">Dia da semana</th>
                <th class="col">Prato do dia</th>
                <th class="col">Preço</th>
            </tr>
          </thead>
          <tbody class="linha">
            <tr>
              <td>0</td>
              <td>Domingo</td>
              <td>Lasanha a quatro queijos</td>
              <td>R$ 12,60</td>
            </tr>
            <tr>
              <td>1</td>
              <td>Segunda-feira</td>
              <td>Frango ao molho madeira</td>
              <td>R$ 10,00</td>
            </tr>
            <tr>
              <td>2</td>
              <td>Terça-feira</td>
              <td>Arroz à grega</td>
              <td>R$ 9,40</td>
            </tr>
            <tr>
              <td>3</td>
              <td>Quarta-feira</td>
              <td>Feijoada à moda da casa</td>
              <td>R$ 11,20</td>
            </tr>
            <tr>
              <td>4</td>
              <td>Quinta-feira</td>
              <td>Nhoque paulista</td>
              <td>R$ 8,50</td>
            </tr>
            <tr>
              <td>5</td>
              <td>Sexta-feira</td>
              <td>Bacalhau ao forno</td>
              <td>R$ 15,20</td>
            </tr>
            <tr>
              <td>6</td>
              <td>Sábado</td>
              <td>Feijão Branco</td>
              <td>R$ 10,00</td>
            </tr>
          </tbody>
        </table>
    </div>
<h3>O resultado a ser mostrado na tela deve estar na seguinte ordem:</h3>
<p>Hoje é: </p>
<p>Nossa sugestão para hoje é:</p>
<p>Preço: <?php echo "$dia" ?></p>
</body>
</html>
<?php
  $array = array('Domingo', 'Segunda-feira', 'Terça-feira', 'Quanta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado');

  $dia = date('l');
  var_dump($dia);
  if($dia == 'Quinta-feira') {
    return 'Lasanha a quatro queijos';
  }
?>