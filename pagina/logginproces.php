<?php
$usuari='adminsitrador';
$contraseña='1234';
$usuariUs=$_POST['usuari'];
$contraseñaUs=$_POST['contraseña'];


if($usuari==$usuariUs&&$contraseña==$contraseñaUs){
    header ("refresh:2;url=form.html");
}else{
    header ("refresh:2;url=loggin.html");
}
?>