<?php

if (!empty($_POST)) {

$usuario = [
    "usuario" => $_POST["usuario"],
    "contrasenia" => password_hash($_POST["contrasenia"], PASSWORD_DEFAULT)
        ];

    $filejson="datosjson.json";
  $usuariosArray = json_decode(file_get_contents($filejson),true);
  $usuariosArray[] = $usuario;
  file_put_contents($filejson, json_encode($usuariosArray));
//decodificar un json desde archivo
var_dump(json_decode(file_get_contents($filejson), true));


}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Formulario</title>
    <meta charset="utf-8">
    <link type="text/css" href="./css/style.css" rel="stylesheet" />
</head>
 
<body>
 
    <div id="registrar">
</div> <!-- fin opcion-->
 
    <div id="envoltura">
        <div id="contenedor">
 
            <div id="cabecera" >
            </div>
 
            <div id="cuerpo">
                <form id="form-login" action="" method="post" autocomplete="off">
                
                    <p><label >Usuario:</label></p>
                        <input name="usuario" type="text" id="usuario" placeholder="Ingresa Usuario" autofocus="" required=""></p>
 
                    <p><label>Contraseña:</label></p>
                        <input name="contrasenia" type="password" id="contrasenia" placeholder="Ingresa Password" required=""></p>
 
                    <p id="bot"><input type="submit" id="submit" name="submit" value="Ingresar" class="boton"></p>
                </form>
            </div><!--fin cuerpo-->
 
            <div id="pie">Ven y dame tus datos</div>
        </div><!-- fin contenedor -->
    </div><!--fin envoltura-->
</body>
 
</html>