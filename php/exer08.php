<?php

function converFahren(){
    #formula °F = °C * 1.8 + 32
    $celsius = $_POST['tTemperatura'];

    $fahrenheit = $celsius * 1.8 + 32;

    echo "A temperatura digitada em graus Celsius é: $celsius °C, que convertendo para Fahrenheit é: ".$fahrenheit."°F";
}

converFahren();

?>


<br><br><a href="../html/botoes.html"><button>Voltar</button></a>