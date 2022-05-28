<?php
  class Professor{
    public $nome;
    public $titulacao;

    function __construct($nome, $titulacao) {
      $this->nome = $nome;
      $this->titulacao = $titulacao;
    }
    function setNome($nome) {
      $this->nome = $nome;
    }
    function getNome() {
      return $this->nome;
    }
    function setTitulacao($titulacao) {
      $this->titulacao = $titulacao;
    }
  }

?>