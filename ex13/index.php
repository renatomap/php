<?php
  include('Carro.php');
  
  $carro = new Carro('Gol', 2018, 'Volkswagen');
  if(@$_POST['btn'] == 'btn1') {
    mostrar();
  }
  function mostrar() {
    global $carro;
    $carro->setModelo($_POST['modelo']);
    $carro->setAno($_POST['ano']);
    $carro->setMarca($_POST['marca']);
  }
  
  include('Cliente.php');
  $cliente = new Cliente('João', 123456789, 'joao@gmail.com', '87954621312' );
  if(@$_POST['btn'] == 'btn2') {
    mostrar2();
  }
  function mostrar2() {
    global $cliente;
    $cliente->setNome($_POST['nome']);
    $cliente->setCelular($_POST['celular']);
    $cliente->setEmail($_POST['email']);
    $cliente->setCpf($_POST['cpf']);
  }
  ?>

<fieldset>
  <legend>Cadastrar Carro</legend>
  <form method="post">
    <input type="text" name="modelo" placeholder="Modelo">
    <input type="text" name="ano" placeholder="Ano">
    <input type="text" name="marca" placeholder="Marca">
    <button type="submit" name="btn" value="btn1">Enviar</button>
  </form>
  <?php 
    global $carro;
    echo "Modelo: " . $carro->getModelo() . "<br>";
    echo "Ano: " . $carro->getAno() . "<br>";
    echo "Marca: " . $carro->getMarca() . "<br>";
  ?>
</fieldset>
<fieldset>
  <legend>Cadastrar Cliente</legend>
  <form method="post">
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="celular" placeholder="Celular">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="cpf" placeholder="CPF">
    <button type="submit" name="btn" value="btn2">Enviar</button>
  </form>
  <?php 
    global $cliente;
    echo "Nome: " . $cliente->getNome() . "<br>";
    echo "Celular: " . $cliente->getCelular() . "<br>";
    echo "Email: " . $cliente->getEmail() . "<br>";
    echo "CPF: " . $cliente->getCpf() . "<br>";
  ?>
</fieldset>