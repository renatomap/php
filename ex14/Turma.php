<?php
  include('Aluno.php');
  include('Professor.php');

  class Turma{
    public $codigo;
    public $sala;
    public $horario;

    function __construct($codigo, $sala, $horario) {
      $this->codigo = $codigo;
      $this->sala = $sala;
      $this->horario = $horario;
    }
    function getestaAberta() {
      return $this->true;
    }
    function setProfessr($professor) {
      return $this-> valor = $professor;
    }
    function  setAluno($aluno) {
      return $this-> valor = $aluno;
    }
  }
?>