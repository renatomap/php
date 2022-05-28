<?php
  class Cliente{
    public $nome; 
    public $celular;
    public $email;
    public $cpf;

    function __construct($nome, $celular, $email, $cpf) {
      $this->nome = $nome;
      $this->celular = $celular;
      $this->email = $email;
      $this->cpf = $cpf;
    }
    function getNome() {
      return $this->nome;
    }
    function getCelular(){
      return $this->celular;
    }
    function getEmail() {
      return $this->email;
    }
    function getCpf() {
      return $this->cpf;
    }
    function setNome($nome) {
      $this->nome = $nome;
    }
    function setCelular($celular) {
      $this->celular = $celular;
    }
    function setEmail($email) {
      $this->email = $email;
    }
    function setCpf($cpf) {
      $this->cpf = $cpf;
    }
  }
?>