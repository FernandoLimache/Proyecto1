<?php 
//var_dump($_GET);

//foreach ($_GET as $usuario=>$email) {
//echo " el $usuario es  $email <br>";}

//echo "<pre>" . print_r(getallheaders(),true) . "</pre>";

    if ($_GET["email"]) {
       if (strlen($_GET["email"]) == 0) {
         echo "El campo esta vacio";
       }
       
       if (filter_var($_GET["email"], FILTER_VALIDATE_EMAIL) == false) {
         echo "El campo no es un email";
       }
       
       if (strlen($_GET["email"]) > 0 && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == true) {
         echo "Correcto";
       }
     } 
   

?>
