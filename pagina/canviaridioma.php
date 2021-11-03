<?php 
$codi=$_GET['codi'];


    $_COOKIE['idioma']="ca";
    setcookie("idioma","ca");
    header("refresh:0.1;url=fitxa.php?codi=".$codi);

?>