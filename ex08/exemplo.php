<html>
<head><title>Prato do dia</title></head>
<body bgcolor='#E6E6FA'>

  <?php
    $s = date('w');
    $semana = Array('Domingo', 'Segunda', 'Terça','Quarta', 'Quinta','Sexta', 'Sábado',);
    $sugestao = Array('Lasanha a quatro queijos', 'Frango ao molho madeira', 'Arroz a grega', 'Feijoada à moda da casa', 'Nhoque Paulista', 'Bacalhau ao forno','Feijão branco');
    $preco = Array(' R$ 12,60',' R$ 10,00','R$ 09,40','R$ 11,20',' R$ 08,50','R$ 15,20','R$ 10,00');
  ?>

<center><font color="#9370DB" face="future" size='10'><strong>PRATOS DO DIA</strong></font></center><br/><br/>

<table align='center' width="100%" height="100" cellpadding="1.5" border="1" style="border-style:solid; border-color:#8A2BE2;">
<tr BGCOLOR='#DDA0DD'>
<th>Elemento</th>
<th>Dia da Semana</th>
<th>Prato do Dia</th>
<th >Preço</th>

</tr>
<tr bgcolor=" <?php echo $s==0?'#DDA0DD':'#E6E6FA'?>">
<td>0</td>
<td>Domingo</td>
<td>Lasanha a quatro queijos</td>
<td>R$ 12,60</td>
</tr>
<tr bgcolor="<?php echo $s==1?'#DDA0DD':'#E6E6FA'?>">
<td>1</td>
<td>Segunda</td>
<td>Frango ao molho madeira</td>
<td>R$ 10,00</td>
</tr>
<tr bgcolor="<?php echo $s==2?'#DDA0DD':'#E6E6FA'?>">
<td>2</td>
<td>Terça</td>
<td>Arroz a grega</td>
<td>R$ 09,40</td>
</tr>
<tr bgcolor="<?php echo $s==3?'#DDA0DD':'#E6E6FA'?>">
<td>3</td>
<td>Quarta</td>
<td>Feijoada à moda da casa</td>
<td>R$ 11,20</td>
</tr>
<tr bgcolor="<?php echo $s==4?'#DDA0DD':'#E6E6FA'?>">
<td >4</td>
<td>Quinta</td>
<td>Nhoque Paulista</td>
<td>R$ 08,50</td>
</tr>
<tr bgcolor="<?php echo $s==5?'#DDA0DD':'#E6E6FA'?>">
<td>5</td>
<td>Sexta</td>
<td>Bacalhau ao Forno</td>
<td>R$ 15,20</td>
</tr>
<tr bgcolor="<?php echo $s==6?'#DDA0DD':'#E6E6FA'?>">
<td>6</td>
<td>Sábado</td>
<td>Feijão branco</td>
<td>R$ 10,00</td>
</tr>
</table>

<?php
echo"<br>";
echo "Dia da semana é: <b>$semana[$s]</b><br>";
echo "O Prato do dia: <b> $sugestao[$s]</b><br>";
echo "O preço: <b> $preco[$s]</b>";

?>
</body>
</html>
