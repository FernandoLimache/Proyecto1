<?php
function triangulo($ba,$al){
    global $funcionesEjecutadas;
    $resultado=($ba*$al)/2;
    $funcionesEjecutadas++;
    return ($resultado);
}

function rectangulo($La,$ha){
    global $funcionesEjecutadas;
    $resultado1=($La*$ha);
    $funcionesEjecutadas++;
    return ($resultado1);
}

function cuadrado($L1){
    global $funcionesEjecutadas;
    $resultado2=($L1*$L1);
    $funcionesEjecutadas++;
    return ($resultado2);
    
}

function circulo($radio){
    global $funcionesEjecutadas;
    $resultado3=($radio^2)*(pi());
    $funcionesEjecutadas++;
    return ($resultado3);
}

?>