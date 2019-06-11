<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica de php</title>
</head>
<body>
<p>ejercicio 1</p>

<?php
$variable1=10;
$variable2=20;
if ($variable1<$variable2) {
    echo "numero mayor es ". $variable2;
}
else{
    echo "numero mayor es" ." " .($variable1);
}
?> 

<p>ejercicio 2</p>
<?php

$x=1;
$y=5;
$nada=null;
$Z=rand($x,$y);
if ($Z==3 || $Z==5) {
    echo "numero es". " " . $Z;
} else {
        print_r($nada);
}

?>

<p>ejercicio 3</p>
<?php

$x1=1;
$y1=5;
$nada1= "el numero no es 3";
$Z1=rand($x1,$y1);
if ($Z1==3) {
    echo "numero es". " " . $Z1;
} else {
        print_r($nada1);
}
?>
 
 <p>ejercicio 4</p>
<?php

$x2=1;
$y2=100;
$nada2= "el numero es mayor de 50";
$Z2=rand($x2,$y2);
if ($Z2<=50) {
    echo "El numero es menor de 50";
} else {
        print_r($nada2);
}
?>
 <p>ejercicio 5</p>
<?php
$nombreDeUsuario="admin";
$ContraseniaDeUsuario="1234";
$ContraseniaDeUsuario="123". rand(1,10);
if ($nombreDeUsuario!="admin"||$ContraseniaDeUsuario!="1234") {
    echo "error en el login";
} else {
    echo "bienvenido!!!";
}
?>
 <p>ejercicio 6</p>
<?php
$edad=rand(1,100);
$casado=[true,False];
$sexo=["masculino","femenino","otro"];
if ($edad>=18||$casado==false) {
    echo "bienvenido!!!";
} else {
    echo "NOOOOOOO";
}
?>
 <p>ejercicio 7</p>
<?php
$CantidadDeAlumnos=rand(-100,100);
if ($CantidadDeAlumnos>=0) {
    echo true;
} else {
    echo false;
}
?>
</body>
</html>
