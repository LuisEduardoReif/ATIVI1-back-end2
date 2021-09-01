<?php

class Turma {
  protected $nome;
  private $qtdAlunos = 0;
  private $dadosTurma;

  public function __construct($nome) {
    $this->nome = $nome;
  }

  public function adicionarAluno(Aluno $aluno) {
    if($this->qtdAlunos != 5) {
      $this->dadosTurma[$this->qtdAlunos] = $aluno;
      echo "O aluno ". $aluno->getNome()." foi inserido com sucesso na turma. </br>";
      $this->qtdAlunos++;
    } else {
      echo "Erro a turma já está cheia.</br>";
    }
  }

  public function mediaTurma() {
    $i = 0;
    $notas = 0;
    for($i; $i < sizeof($this->dadosTurma); $i++) {
      $notas += $this->dadosTurma[$i]->getMedia();
    }
    $mediaTurma = $notas / sizeof($this->dadosTurma);
    echo "<h3>A média da turma é: " .$mediaTurma."</h3></br>";

    foreach($this->dadosTurma as $aluno) {
    echo "
      <h2>".$aluno->getNome()."</h2>
      <table>
        <thead>
          <tr>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Nota 4</th>
            <th>Média</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>".$aluno->getNota1()."</td>
            <td>".$aluno->getNota2()."</td>
            <td>".$aluno->getNota3()."</td>
            <td>".$aluno->getNota4()."</td>
            <td>".$aluno->getMedia()."</td>
          </tr>
        </tbody>
      </table>
      </br>";
    }
      
  }

  public function getNome() {
    return $this->nome;
  }
}


?>