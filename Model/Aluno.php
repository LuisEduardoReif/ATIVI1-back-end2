<?php 

class Aluno {
  protected $nome;
  protected $ra;
  protected $nota1;
  protected $nota2;
  protected $nota3;
  protected $nota4;

  public function setValores($nome, $ra, $nota1, $nota2, $nota3, $nota4) {
    $this->nome = $nome;
    $this->ra = $ra;
    $this->nota1 = $nota1;
    $this->nota2 = $nota2;
    $this->nota3 = $nota3;
    $this->nota4 = $nota4;
  }
  
  public function getMedia() {
    return ($this->nota1 + $this->nota2 + $this->nota3 + $this->nota4) / 4;
  }

  public function getNome(){
    return $this->nome;
  }

  public function getNota1() {
    return $this->nota1;
  }
  public function getNota2() {
    return $this->nota2;
  }
  public function getNota3() {
    return $this->nota3;
  }
  public function getNota4() {
    return $this->nota4;
  }
}



?>