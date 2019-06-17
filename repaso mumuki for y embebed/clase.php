
<p>Ejercicio 1</p>
<?php
    $resultado = [];
for ($i=0;$i<=10;$i++){
  $resultado[]=$i . "<br>";
}
    print_r ($resultado);
?>

<p>Ejercicio 2</p>
<?php
    $resultado = [];
for ($i=5;$i<=10;$i++){
  $resultado[]=$i . "<br>";
}
    print_r ($resultado);
?>

<p>Ejercicio 3</p>
<?php
$resultado = [];
for ($i=2;$i<=20;$i=$i+2){
  $resultado[]=$i . "<br>";
}
    print_r ($resultado);
?>
<p>Ejercicio 4</p>
<?php
    $unArray=[10,20,30];
    $resultado = 0;
 for ($i=0; $i <count($unArray) ; $i++) { 
     $resultado=$unArray[$i]+$resultado;
    }   
    print_r ($resultado);
?>
<p>Ejercicio 5</p>
<?php
    $unArray=[1,2,3,4,5,7];
    $resultado = [];
    for ($i=0; $i <count($unArray) ; $i++) { 
        if (($unArray[$i]%2)==0) {
            $resultado[]=$i. "<br>";
    }
    }
    print_r ($resultado);
?>

<p>Ejercicio 6</p>
<?php
    $numero=100;
    $resultado = [];
    while ($numero <= 100) {
       $resultado[]= $numero++;
    }
    print_r ($resultado);
?>
