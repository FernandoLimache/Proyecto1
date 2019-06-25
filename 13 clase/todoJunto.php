<?php
require ("saludo.php");
require ("funciones.php");
require ("superficie.php");
require ("incluir.php");

$funcionesEjecutadas=0;

function comparaCirculo($a,$b,$c){
    $resul=( max($a,$b,$c));
    $compara= circulo($resul);
    return($compara);
}


$string = 'Me encanta php, a mi también me encanta php!';
$findme = 'php';
$pos = strpos($string, $findme,true);

echo $pos;
?>