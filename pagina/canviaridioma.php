<?php 
$codi=$_GET['codi'];

if($_COOKIE['idioma']=="es"){
    $_COOKIE['idioma']="ca";
    setcookie("idioma","ca");
    header("refresh:1;url=fitxa.php?codi=".$codi);
}
?>