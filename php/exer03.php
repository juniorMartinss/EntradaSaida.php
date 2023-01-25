<?php

$binario = 0;
$decimal = 0;

    function binarioDecimal(){

        

        $binario = $_POST['tBinario'];
        $tamanho = strlen($binario);
        $contador = $tamanho - 1;
        for($i = 0; $i < $tamanho; $i++){
            if(substr($binario,$i,1) == 1){
                $decimal += pow(2,$contador);
            }
            $contador--;
        }//fim do for
        return $decimal;
    }//fim do binário para decimal

    function decimalBinario(){

        
       
        $decimal = $_POST['tDecimal'];
        while($decimal >= 1){
            $binario .= $decimal % 2;
            $decimal = $decimal / 2;
        };
        return $binario;
    }//fim do binário para decimal

    echo binarioDecimal();
    echo decimalBinario();

?>

<br><br><a href="../html/botoes.html"><button>Voltar</button></a>