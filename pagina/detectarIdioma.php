<?php
function obtenerIidoma(){
    $idioma= substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
    return $idioma;
}
$idioma_usuario=obtenerIidoma();
$_COOKIE['idioma']=$idioma_usuario;
echo $_COOKIE['idioma'];
?>
