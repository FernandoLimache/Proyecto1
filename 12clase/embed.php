<?php
$nombre="fernando Limache Portilla";

$numero=rand(0,1);
if ($numero==0) {
  $gano="si";
}else {
  $gano="no";
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La Internet</h1>
    <marquee>Bienvenidos al mundo de la internet</marquee>
    <h2>Bienvenido <?= $nombre ?> </h2>
    <h3>¿Es usted un ganador? <?= $gano ?></h3>

    <h3>Algunos sitios interesantes:</h3>
    <ul>
      <li>
        <a href="https://google.com">Google</a>
      </li>
      <li>
        <a href="https://facebook.com">Facebook</a>
      </li>
      <li>
        <a href="https://twitter.com">Twitter</a>
      </li>
    </ul>
  </body>
</html>
