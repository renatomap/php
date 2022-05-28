<?php
  class Carro{
    public $modelo;
    public $ano;
    public $marca;

    function __construct($modelo, $ano, $marca) {
      $this->modelo = $modelo;
      $this->ano = $ano;
      $this->marca = $marca;
    }
    function getModelo() {
      return $this->modelo;
    }
    function getAno() {
      return $this->ano;
    }
    function getMarca() {
      return $this->marca;
    }
    function setModelo($modelo) {
      $this->modelo = $modelo;
    }
    function setAno($ano) {
      $this->ano = $ano;
    }
    function setMarca($marca) {
      $this->marca = $marca;
    }
  }
?>