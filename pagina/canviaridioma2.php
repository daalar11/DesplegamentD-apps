<?php 
$codi=$_GET['codi'];
if($_COOKIE['idioma']=="ca"){
    $_COOKIE['idioma']="es";
    setcookie("idioma","es");
    header("refresh:1;url=fitxa.php?codi=".$codi);
}

?>