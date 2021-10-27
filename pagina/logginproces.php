<?php
$usuari='adminsitrador';
$contraseña='1234';
$usuariUs=$_POST['usuari'];
$contraseñaUs=$_POST['contraseña'];


if(strnatcmp($usuari,$usuariUs)==true && strnatcmp($contraseñaUs,$contraseña)== true){
    header ("refresh:2;url=form.html");
}else{
    header ("refresh:2;url=loggin.php");
}
?>