<?php
  class Aluno{
    public $nome;
    public $matricula;

    function __construct($nome, $matricula) {
      $this->nome = $nome;
      $this->matricula = $matricula;
    }
    function setNome($nome) {
      $this->nome = $nome;
    }
    function getNome() {
      return $this->nome;
    }
    function setMatricula($matricula) {
      $this->setMatricula = $matricula;
    }
    function getMatricula() {
      return $this->matricula;
    }
    
  }
?>