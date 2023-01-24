<?php
function fibonacci(){
    $n   = $_POST['tFibonaci'];
    $ant = 0;
    $pro = 1;
    $res = 0;
    $msg = $ant." ".$pro;
    for($i = 0; $i <= $n; $i++){
        $res = $ant + $pro;
        $msg .= " ".$res;
        $ant = $pro;
        $pro = $res; 
    }
    return $msg;
}

echo fibonacci();
?>

<br><br><a href="../html/botoes.html"><button>Voltar</button></a>