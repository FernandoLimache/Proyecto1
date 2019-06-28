
<?php

$errors=[];

 if ($_GET) {
    if (strlen($_GET["nombre"]) == 0) {
      $errors [] = "El campo esta vacio <br>";
    }
    
    if (filter_var($_GET["email"], FILTER_VALIDATE_EMAIL) == false) {
      $errors [] ="El campo no es un email <br>";
    }
    
    if (strlen($_GET["email"]) > 0 && filter_var($_GET["email"], FILTER_VALIDATE_EMAIL) == true) {
      $errors [] = "Correcto <br>";
    }
  } 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <?php if ($errors):?>
  <ul>
  <?php foreach ($errors as $error):?>
  <li><?=$error?> </li>
<?php endforeach?>
<?php endif?>

  </ul>

    <form action="" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <label for="email">E-mail:</label>
        <input type="text" name="email">
        <br>
        <input type="submit">
    </form>
    <d/body>
</html>