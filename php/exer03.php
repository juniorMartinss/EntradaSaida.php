<?php
    function binarioDecimal($binario){
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


?>