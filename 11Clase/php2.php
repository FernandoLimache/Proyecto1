<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Ejercicio 1</p>
    <?php

    //mostrar la tabla de multiplicar del 2 utilizando for ($i=0; $i < ; $i++) { 
        # code...//

    for ($i=0; $i<=10; $i++) { 
        $Respuesta=(2*$i);
        echo " 2 por " .$i ." = " . $Respuesta ."<br>";
    }
    ?>
    <p>Ejercicio 2</p>
    <?php

    //un bucle que cuente desde 100 hasta 85//

    for ($i=100; $i>=85; $i--) { 
        $Respuesta=($i);
        echo " el numero es " .$i ."<br>";
    }
    ?>
    <p>Ejercicio 3</p>
    <?php

    //un bucle//
    $i = 0;
    while ($i <= 5) {
        $i++;
        $res=($i*2);
        echo " el numero doble de " .$i ."es " .$res ."<br>";
    }
    ?>
    <p>Ejercicio 4</p>
    <?php

    //un bucle//
    
    $cantCaras=0;
    $cantLances=0;
    while ($cantCaras<5) {
        $moneda= rand(0,1);
        if ($moneda==0) {
            $cantCaras++;
        }
        $cantLances++;

    }
    echo " pasaron  " .$cantLances ." numeros de lances hasta obtener 5 caras " ."<br>";
    ?>
    <p>Ejercicio 5</p>
    <?php
    
    $arra=["fernando","Sandra","lidia","hermer","Susana"];
    for ($i=0; $i < count($arra); $i++) { 
        echo $arra[$i]."<br>";
    }
    ?>
    <br>
    <?php
    foreach ($arra as $arra) {
        echo $arra."<br>";
    }
    ?>

</body>
</html>