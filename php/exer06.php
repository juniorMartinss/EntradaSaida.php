<?php
    $nome = 0;
    $salario = 0;
    $vendas = 0;

function salarioFinal(){
    $nome = $_POST['tVendedor'];
    $salario = $_POST['tSalario'];
    $vendas = $_POST['tVendas'];

    $salFinal = $vendas * 0.15 + $salario;

    echo "O colaborador $nome, tem de salário fixo de R$ $salario e devido a porcentagem de 15% sobre total de vendas de R$ $vendas, o mesmo vai receber: ".$salFinal;
}

salarioFinal();
?>

<br><br><a href="../html/botoes.html"><button>Voltar</button></a>