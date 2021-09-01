<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Notas da truma</title>
</head>
<body>
    <main>
        <section>
         <?php
            require_once('./Model/Aluno.php');
            require_once('./Model/Turma.php');

            $aluno1 = new Aluno();
            $aluno1->setValores('Luiz Gustavo', 58694713, 8, 8, 10, 10);

            $aluno2 = new Aluno();
            $aluno2->setValores('Antonio da Silva', 58694711, 9, 7, 7, 9);

            $aluno3 = new Aluno();
            $aluno3->setValores('Vitor Angelo', 58694712, 9, 7, 8, 8);

            $aluno4 = new Aluno();
            $aluno4->setValores('Elvis Pereira', 58694732, 9, 8, 7, 7);

            $aluno5 = new Aluno();
            $aluno5->setValores('Marco Antonio', 58694723, 9, 9, 9, 9);

            $aluno6 = new Aluno();
            $aluno6->setValores('Outro Aluno', 58694722, 2,3, 5, 4 );

            $alunos = [$aluno1,$aluno2,$aluno3,$aluno4,$aluno5, $aluno6];

            $turma = new Turma('Artes');

            for($i = 0; $i < count($alunos); $i++){
                $turma->adicionarAluno($alunos[$i]);
            }
        ?>
            <h1>Controle de Notas de Turma</h1>
            <h1>Notas dos Alunos da turma de <?=$turma->getNome();?></h1>
            </br></br>

        </section>

        <section>
            <?php
                echo $turma->mediaTurma();

            ?>
        </section>
    </main>
        <footer>

            <h4 class="rodape">Desenvolvido por <a href="https://github.com/LuisEduardoReif/ATIVI1-back-end2" target="_blank" >Luis Eduardo da silva Reif</a></h4>
        </footer>

</body>
</html>