<?php 
$codi=$_GET['codi'];

    $_COOKIE['idioma']="es";
    setcookie("idioma","es");
    header("refresh:0.1;url=fitxa.php?codi=".$codi);


?>