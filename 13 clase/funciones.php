<?php
function mayor($num1,$num2,$num3=100){
    global $funcionesEjecutadas;
return( max($num1,$num2,$num3));
$funcionesEjecutadas++;
}

function tabla($pbase,$plimite=100){
    global $funcionesEjecutadas;
    for ($i=$pbase; $i <=$plimite ; $i++) { 
        $resultado[]=$i;
    }
    $funcionesEjecutadas++;
    return $resultado;
}
//echo print_r(tabla(3,10),true)


 ?>