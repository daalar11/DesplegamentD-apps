<?php
$usuari='adminsitrador';
$contraseña='1234';
$usuariUs=$_POST['usuari'];
$contraseñaUs=$_POST['contraseña'];


if(strnatcmp($usuari,$usuariUs)&&strnatcmp($contraseñaUs,$contraseña)){
    header ("refresh:2;url=form.html");
}else{
    header ("refresh:2;url=loggin.php");
}
?>