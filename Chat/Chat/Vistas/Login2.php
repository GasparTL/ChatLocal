<?php

if($_POST['user'] && $_POST['pass']) {
     if($Registro==0) {

        echo "Error, no existen registros que coincidan con tu user y password";

     } else {

        echo "Login exitoso";

     }
} else {

   echo "actiom:login.php Introduce user y password para loguearte";

}

?>