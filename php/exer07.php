<?php

function notaAluno(){
    $nome = $_POST['tAluno'];
    $nota1 = $_POST['tNota1'];
    $nota2 = $_POST['tNota2'];
    $nota3 = $_POST['tNota3'];

    $mediaFinal = ($nota1 + $nota2 + $nota3) / 3;

    echo "O aluno(a) $nome recebeu durante o semestre as seguintes notas: $nota1, $nota2, $nota3. Com isso sua média final é: ".$mediaFinal;

}

notaAluno();

?>


<br><br><a href="../html/botoes.html"><button>Voltar</button></a>