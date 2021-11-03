<?php 
$codi=$_GET['codi'];

    $_COOKIE['idioma']="es";
    setcookie("idioma","es");
    header("refresh:1;url=fitxa.php?codi=".$codi);


?>